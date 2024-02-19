<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Survey;
use App\Models\SurveyQuestion;
use App\Models\SurveyUser;
use Auth,stdClass,Common;
use App\Exports\SurveyExport;
use Maatwebsite\Excel\Facades\Excel;
class FeedbackController extends Controller
{
    public function feedbackForms(){
        $dataF = Survey::select('id','str_slug','survey_title','category_id','description','status')->with('category:id,category_name')->whereIn('status',[0,1]);
        if(Auth::user()->u_type!=1){
            $dataF->where('created_by',Auth::id());
        }
        $dataF = $dataF->paginate(50);
        $data['feedbacks'] = $dataF;
        return view('admin.feedback.feedback-forms',$data);
    }

    public function addSurveyForm(){
        $data['categories'] = Category::where('status',1)->get();
        return view('admin.feedback.add-survey-form',$data);
    }

    public function storeSurveyForm(Request $request){
        $request->validate([
            'survey_title'=>'required',
            'start_date'=>'required',
            'category'=>'required'
        ]);
        $startDate =  date("Y-m-d H:i:s",strtotime($request->start_date));
        $endDate =  $request->end_date!=null ?  date("Y-m-d H:i:s",strtotime($request->end_date)) : null;

        try{
            \DB::beginTransaction();
                $slug = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz1234567890'),0,12);
                $surveyObj = new Survey();
                $surveyObj->str_slug = $slug;
                $surveyObj->survey_title = $request->survey_title;
                $surveyObj->start_date = $startDate;
                $surveyObj->end_date = $endDate;
                $surveyObj->category_id = $request->category;
                $surveyObj->description = $request->description;
                $surveyObj->additional_note = $request->additional_note;
                $surveyObj->created_by = Auth::id();
                $surveyObj->status = 1;
                $surveyObj->save();
                $surveyId = $surveyObj->id;
                $insData = [];
                foreach($request->question as $k=>$value){
                    $opt = null;
                    if(in_array($request->q_type[$k],[2,3])){
                        $arr = isset($request->options[$k]) ? $request->options[$k] : [];
                        $opt = json_encode($arr);
                    }
                    $insData[] = [
                        'survey_id'=>$surveyId,
                        'question'=>$value,
                        'q_type'=>$request->q_type[$k],
                        'q_options'=>$opt,
                        "created_at" => date("Y-m-d H:i:s"),
                        "updated_at" => date("Y-m-d H:i:s")
                    ];
                }
                if($insData){
                    SurveyQuestion::insert($insData);
                }
                
            \DB::commit();
            return redirect('admin/feedback-forms')->with('success','Survey added successfully...');
        }catch(\Exception $e){
            \DB::rollback();
            return redirect('admin/feedback-forms')->with('error','Something went wrong..Survey not added');
        }
    }

    public function editSurveyForm(){
        $id = $this->memberObj['id'];
        $data['categories'] = Category::where('status',1)->get();
        $data['feedbackData'] = Survey::with('survey_question')->find($id);
        $inputObj = new stdClass();
        $inputObj->params = 'id='.$id;
        $inputObj->url = url('admin/update-survey-form');
        $updateLink = Common::encryptLink($inputObj);
        $data['updateLink'] = $updateLink;
        return view('admin.feedback.edit-survey-form',$data);
    }

    public function updateSurveyForm(Request $request){
        $request->validate([
            'survey_title'=>'required',
            'start_date'=>'required',
            'category'=>'required'
        ]);
        $startDate =  date("Y-m-d H:i:s",strtotime($request->start_date));
        $endDate =  $request->end_date!=null ?  date("Y-m-d H:i:s",strtotime($request->end_date)) : null;
        $surveyId = $this->memberObj['id'];
        try{
            \DB::beginTransaction();
                $surveyObj = Survey::find($surveyId);
                $surveyObj->survey_title = $request->survey_title;
                $surveyObj->start_date = $startDate;
                $surveyObj->end_date = $endDate;
                $surveyObj->category_id = $request->category;
                $surveyObj->description = $request->description;
                $surveyObj->additional_note = $request->additional_note;
                $surveyObj->save();
                $insData = [];
                if(!empty($request->question)){
                    foreach($request->question as $k=>$value){
                        $opt = null;
                        if(in_array($request->q_type[$k],[2,3])){
                            $arr = isset($request->options[$k]) ? $request->options[$k] : [];
                            $opt = json_encode($arr);
                        }
                        $insData[] = [
                            'survey_id'=>$surveyId,
                            'question'=>$value,
                            'q_type'=>$request->q_type[$k],
                            'q_options'=>$opt,
                            "created_at" => date("Y-m-d H:i:s"),
                            "updated_at" => date("Y-m-d H:i:s")
                        ];
                    }
                    if($insData){
                        SurveyQuestion::insert($insData);
                    }
                }

                foreach($request->question_up as $k=>$value){
                    $opt = null;
                    if(in_array($request->q_type_up[$k],[2,3])){
                        $arr = isset($request->options_up[$k]) ? $request->options_up[$k] : [];
                        $opt = json_encode($arr);
                    }
                    $data = [
                        'question'=>$value,
                        'q_type'=>$request->q_type_up[$k],
                        'q_options'=>$opt,
                        "updated_at" => date("Y-m-d H:i:s")
                    ];
                    SurveyQuestion::where("id",$k)->update($data);
                }
            \DB::commit();
            return redirect('admin/feedback-forms')->with('success','Survey updated successfully...');
        }catch(\Exception $e){
            \DB::rollback();
            // echo $e->getLine().'---'.$e->getMessage();die;
            return redirect('admin/feedback-forms')->with('error','Something went wrong..Survey not updated');
        }
    }

    public function removeSurveyQuestion(){
        $id = $this->memberObj['id'];
        SurveyQuestion::where("id",$id)->delete();
        return redirect()->back()->with('success','Survey question removed successfully...');
    }

    public function removeSurveyForm(){
        $id = $this->memberObj['id'];
        Survey::where('id',$id)->update(['status'=>2]);
        return redirect()->back()->with('success','Survey removed successfully...');
    }

    public function changeSurveyStatus(Request $request){
        $id = $this->memberObj['id'];
        $status = $request->status;
        Survey::where("id",$id)->update(['status'=>$status]);
        return response()->json(['msg'=>"SUCCESS"]);
    }

    public function duplicateSurvey(){
        $id = $this->memberObj['id'];
        $feedbackData = Survey::with('survey_question')->find($id);
        $slug = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz1234567890'),0,12);
        $surveyObj = new Survey();
        $surveyObj->str_slug = $slug;
        $surveyObj->survey_title = $feedbackData->survey_title;
        $surveyObj->start_date = $feedbackData->start_date;
        $surveyObj->end_date = $feedbackData->end_date;
        $surveyObj->category_id = $feedbackData->category_id;
        $surveyObj->description = $feedbackData->description;
        $surveyObj->created_by = Auth::id();
        $surveyObj->status = 1;
        $surveyObj->save();
        $surveyId = $surveyObj->id;
        $insData = [];
        foreach($feedbackData->survey_question as $value){
            $insData[] = [
                'survey_id'=>$surveyId,
                'question'=>$value,
                'q_type'=>$value->q_type,
                'q_options'=>$value->q_options,
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ];
        }
        if($insData){
            SurveyQuestion::insert($insData);
        }
        return redirect()->back()->with('success','Survey copied successfully...');
    }

    public function surveyResponse(){
        $id = $this->memberObj['id'];
        $data['surveyData'] = Survey::select('survey_title','id')->with('survey_question_all')->find($id);
        $inputObj = new stdClass();
        $inputObj->params = 'id='.$id;
        $inputObj->url = url('admin/survey-response');
        $sumLink = Common::encryptLink($inputObj);

        $inputObjI = new stdClass();
        $inputObjI->params = 'id='.$id;
        $inputObjI->url = url('admin/survey-response-individual');
        $IndLink = Common::encryptLink($inputObjI);


        $inputObjEE = new stdClass();
        $inputObjEE->params = 'id='.$id;
        $inputObjEE->url = url('admin/survey-response-export');
        $IndLinkEE = Common::encryptLink($inputObjEE);

        $data['IndLinkEE'] = $IndLinkEE;
        $data['summary_link'] = $sumLink;
        $data['individual_link'] = $IndLink;
        return view('admin.feedback.survey-response',$data);
    }

    public function surveyResponseIndividual(){
        $id = $this->memberObj['id'];
        $data['surveyData'] = Survey::select('survey_title','id')->find($id);
        $inputObj = new stdClass();
        $inputObj->params = 'id='.$id;
        $inputObj->url = url('admin/survey-response');
        $sumLink = Common::encryptLink($inputObj);

        $inputObjEE = new stdClass();
        $inputObjEE->params = 'id='.$id;
        $inputObjEE->url = url('admin/survey-response-export');
        $IndLinkEE = Common::encryptLink($inputObjEE);

        $data['IndLinkEE'] = $IndLinkEE;

        $inputObjI = new stdClass();
        $inputObjI->params = 'id='.$id;
        $inputObjI->url = url('admin/survey-response-individual');
        $IndLink = Common::encryptLink($inputObjI);
        $data['summary_link'] = $sumLink;
        $data['individual_link'] = $IndLink;
        $data['surveyIndividual'] = SurveyUser::select('id','email')->with('survey_answer')->where('survey_id',$id)->paginate(1);
        
        return view('admin.feedback.survey-response-individual',$data);
    }

    public function surveyResponseExport(){
        $id = $this->memberObj['id'];
        $surveyData = Survey::select('id','survey_title')->with('survey_question')->where(['id'=>$id])->first();
        return Excel::download(new SurveyExport($surveyData), $surveyData->survey_title.'.xlsx');
    }

}
