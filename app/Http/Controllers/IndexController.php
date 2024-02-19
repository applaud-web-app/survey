<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\SurveyUser;
use App\Models\SurveyUserAnswer;
use App\Models\PasswordResetToken;
use App\Models\User;
use stdClass,Common,Auth,Session;

class IndexController extends Controller
{
    public function feedback($id,$slug){
        $feedbackData = Survey::select('id','survey_title','category_id','description','start_date','end_date','str_slug')->with('category:id,category_name')->where(['id'=>$id,'str_slug'=>$slug,'status'=>1])->first();
        if(time()<strtotime($feedbackData->start_date)){
            return view('index.feedback-not-started');
        }
        if($feedbackData->end_date!=null){
            if(time()>strtotime($feedbackData->end_date)){
                return view("index.feedback-end");
            }
        }
        if(\Cookie::get('FDBCK_'.$feedbackData->id) !== null){
            return redirect('feedback-submitted/'.$feedbackData->id.'/'.$feedbackData->str_slug);
        }
        $data['feedbackData'] = $feedbackData;
        $data['nextLink'] = url('feedback-process/'.$id.'/'.$slug);
        return view('index.feedback',$data);
    }

    public function feedbackProcess($id,$slug){
        
        $feedbackData = Survey::select('id','start_date','end_date','str_slug','additional_note')->with('survey_question')->where(['id'=>$id,'str_slug'=>$slug,'status'=>1])->first();
        if(time()<strtotime($feedbackData->start_date)){
            return view('index.feedback-not-started');
        }
        if($feedbackData->end_date!=null){
            if(time()>strtotime($feedbackData->end_date)){
                return view("index.feedback-end");
            }
        }
        if(\Cookie::get('FDBCK_'.$feedbackData->id) !== null){
            return redirect('feedback-submitted/'.$feedbackData->id.'/'.$feedbackData->str_slug);
        }
        $data['feedbackData'] = $feedbackData;
        $inputObj = new stdClass();
        $inputObj->params = 'id='.$id;
        $inputObj->url = url('save-feedback');
        $encLink = Common::encryptLink($inputObj);
        $data['encLink'] = $encLink;
        return view('index.feedback-process',$data);
    }

    public function saveFeedback(Request $request){
        $id = $this->memberObj['id'];
        $feedbackData = Survey::select('id','str_slug')->with('survey_question')->find($id);
        $ansData = $request->f_ans;
        $insData = [];
        try{
            \DB::beginTransaction();
                $surveyUserObj = new SurveyUser();
                $surveyUserObj->survey_id = $feedbackData->id;
                $surveyUserObj->user_id = Auth::check() ? Auth::id() : 0;
                $surveyUserObj->email = null;
                $surveyUserObj->save();
                $sUserId = $surveyUserObj->id;

                $cookieKey = 'FDBCK_'.$feedbackData->id;
                $CkVal = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,20);

                foreach($feedbackData->survey_question as $value){
                    $ans = null;
                    switch($value->q_type){
                        case 1:
                            $ans = isset($ansData[$value->id]) ? $ansData[$value->id] : null;
                        break;
                        case 2:
                            $ans = isset($ansData[$value->id]) ? $ansData[$value->id] : null;
                        break;
                        case 3:
                            $ans = isset($ansData[$value->id]) && !empty($ansData[$value->id]) ? implode(",",$ansData[$value->id]) : null;
                        break;
                        case 4:
                            $ans = isset($ansData[$value->id]) && !empty($ansData[$value->id]) ? date("d M Y",strtotime($ansData[$value->id])) : null;
                        break;
                        case 5:
                            $ans = isset($ansData[$value->id]) ? $ansData[$value->id] : null;
                        break;
                    }
                    $insData[] = [
                        'survery_user_id'=>$sUserId,
                        'survey_id'=>$feedbackData->id,
                        'question'=>$value->question,
                        'survey_question_id'=>$value->id,
                        'answer'=>$ans,
                        'created_at'=>date("Y-m-d H:i:s"),
                        'updated_at'=>date("Y-m-d H:i:s")
                    ];
                }
                if($insData){
                    SurveyUserAnswer::insert($insData);
                }
                Session::put('LST_SURVEY_ID',$sUserId);  
                Session::put('SURVEY_ID',$id);  
            \DB::commit();
            return redirect('feedback-submitted/'.$feedbackData->id.'/'.$feedbackData->str_slug)->withCookie(cookie()->forever($cookieKey, $CkVal));
        }catch(\Exception $e){
            \DB::rollback();
            echo'<h1>SOMETHING WENT WRONG >>> FEEDBACK NOT SUBMITTED</h1>';
        }
    }

    public function feedbackSubmitted($id,$slug){
        $feedbackData = Survey::select('id','start_date','end_date')->where(['id'=>$id,'str_slug'=>$slug])->first();
        if(time()<strtotime($feedbackData->start_date)){
            return view('index.feedback-not-started');
        }
        if($feedbackData->end_date!=null){
            if(time()>strtotime($feedbackData->end_date)){
                return view("index.feedback-end");
            }
        }
        if($feedbackData->id!=Session::get('SURVEY_ID')){
            return view('feedback.survey-end');
        }
        $sId = Session::get('LST_SURVEY_ID');
        $suveyUser = SurveyUser::select('email')->find($sId);
        $inputObj = new stdClass();
        $inputObj->params = 'id='.$id;
        $inputObj->url = url('save-feedback-email');
        $encLink = Common::encryptLink($inputObj);
        return view('index.feedback-submitted',compact('encLink','suveyUser'));
        
    }

    public function saveFeedbackEmail(Request $request){
        $request->validate([
            'email'=>'required',
            'full_name'=>'required'
        ]);
        $id = $this->memberObj['id'];
        $sId = Session::get('LST_SURVEY_ID');
        SurveyUser::where(['id'=>$sId,'survey_id'=>$id])->update(['email'=>$request->email,'full_name'=>$request->full_name]);
        return redirect()->back()->with('success','Mail submitted successfully...');
    }

    public function forgetPassword(){
        return view("index.forget-password");
    }

    public function sendResetLink(Request $request){
        $request->validate([
            'email'=>'required|email'
        ]);
        $checkEmail = User::where(['email'=>$request->email,'u_status'=>1])->where('u_type','!=',1)->first();
        
        if(!$checkEmail){
            return redirect('forget-password')->with('error','Enter registered email account to reset your password');
        }
        $token = str_shuffle('abcdefghijklmnopqrstuvwxyz1234567890');
        $data = [
            'email'=>$request->email,
            'token'=>$token,
            'user'=>$checkEmail
        ];

        PasswordResetToken::where(['email'=>$request->email])->delete();

        PasswordResetToken::insert([
            'email'=>$request->email,
            'token'=>$token
        ]);

        \Mail::send('index.send-reset-link', $data, function($message) use($data) {
            $message->to($data['email'], 'CalendarApp')->subject
                ('Password Reset Link - '.date("d M Y h:i A"));
        });
        return redirect('forget-password')->with('success','Password reset link sent your email successfully...');
    }
    
    public function resetPassword(Request $request){
        $email = $request->email;
        $token = $request->token;
        $checkValid = PasswordResetToken::where(['email'=>$email,'token'=>$token])->first();
        if(!$checkValid){
            return redirect('forget-password')->with('error','Invalid link or link expired...');
        }
        return view('index.reset-password');
    }

    public function storeResetPassword(Request $request){
        $request->validate([
            'password'=>'required'
        ]);
        $email = $request->email;
        $token = $request->token;
        $checkValid = PasswordResetToken::where(['email'=>$email,'token'=>$token])->first();
        if(!$checkValid){
            return redirect('forget-password')->with('error','Invalid link or link expired...');
        }
        PasswordResetToken::where('email',$checkValid->email)->delete();
        User::where('email',$email)->update(['password'=>\Hash::make($request->password)]);
        return redirect('/')->with('success','Password changed successfully..Login to continue');

    }

}
