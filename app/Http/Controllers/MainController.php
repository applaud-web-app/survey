<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash,Auth;
class MainController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect("admin/feedback-forms");
        }
        return view("auth.login");
    }

    public function checkLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $rememberMe = !empty($request->remember_me) ? $request->remember_me : 0;
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],$rememberMe)){
            if(Auth::user()->u_status!=1){
                Auth::logout();
                return redirect('/')->with('warning','Account is deactivated..contact admin for more info...');
            }
            return redirect("admin/feedback-forms");
        }
        return redirect('/')->with('warning','Invalid login credentials..');
    }

    public function signUp(){
        if(Auth::check()){
            return redirect("admin/feedback-forms");
        }
        return view('auth.sign-up');
    }

    public function storeSignUp(Request $request){
        $request->validate([
            'full_name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'phone_number'=>'required'
        ]);
        $checkEmail = User::where('email',$request->email)->count();
        if($checkEmail){
            return redirect()->back()->with('warning','Email already exists..');
        }
        $userObj = new User();
        $userObj->email = $request->email;
        $userObj->name = $request->full_name;
        $userObj->phone_number = $request->phone_number;
        $userObj->password = Hash::make($request->password);
        $userObj->u_status = 1;
        $userObj->u_type = 2;
        $userObj->save();
        if(Auth::check()){
            return redirect('admin/all-users')->with('success','Account created successfully..');
        }
        return redirect('/')->with('success','Account created successfully..Login to continue');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

   

    public function profile(){
        return view('auth.profile');
    }

    public function updateMyProfile(Request $request){
        $request->validate([
            'full_name'=>'required',
            'phone_number'=>'required',
            'email'=>'required',
        ]);
        $checkEmail = User::where('email',$request->email)->where('id','!=',Auth::id())->count();
        if($checkEmail){
            return redirect("admin/profile")->with('error','Email already exists');
        }
        User::where('id',Auth::id())->update([
            'name'=>$request->full_name,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email
        ]);
        return redirect("admin/profile")->with('success','Profile updated successfully...');
    }
   
    public function updatePassword(Request $request){
        $request->validate([
            'password'=>'required',
            'confirm_password'=>'required|same:password'
        ],['same'=>'New Password and Confirm Password should match']);
        User::where('id',Auth::id())->update(['password'=>\Hash::make($request->password)]);
        return redirect("admin/profile")->with('success','Password updated successfully...');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function addCategory(){
        return view('add-category');
    }

    public function categories(){
        return view('categories');
    }
    public function addSurveyForm(){
        return view('add-survey-form');
    }
    public function surveyForms(){
        return view('survey-forms');
    }
    public function addUser(){
        return view('add-user');
    }

    public function users(){
        return view('users');
    }
    public function termsConditions(){
        return view("terms-conditions");
    }
    public function privacyPolicy(){
        return view("privacy-policy");
    }
    
   
  
}
