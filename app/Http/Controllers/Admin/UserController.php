<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User,stdClass,Common;
class UserController extends Controller
{
    public function allUsers(){
        $data['users'] = User::select('id','name','email','phone_number','u_status','u_type')->where('u_type','!=',1)->paginate(50);
        return view('admin.user.all-users',$data);
    }

    public function addUser(){
        return view('admin.user.add-user');
    }

    public function editUser(){
        $id = $this->memberObj['id'];
        $data['user'] = User::select('id','name','email','phone_number','u_status')->find($id);
        $inputObj = new stdClass();
        $inputObj->params = 'id='.$id;
        $inputObj->url = url('admin/update-user');
        $encLink = Common::encryptLink($inputObj);
        $data['updateLink'] = $encLink;
        return view('admin.user.edit-user',$data);
    }

    public function updateUser(Request $request){
        $id = $this->memberObj['id'];
        $request->validate([
            'full_name'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
            'status'=>'required'
        ]);
        $checkEmail = User::where('email',$request->email)->where('id','!=',$id)->count();
        if($checkEmail){
            return redirect()->back()->with('warning','Email already exists..');
        }
        $userObj = User::find($id);
        $userObj->email = $request->email;
        $userObj->name = $request->full_name;
        $userObj->phone_number = $request->phone_number;
        if(!empty($request->password)){
            $userObj->password = Hash::make($request->password);
        }
        $userObj->u_status = $request->status;
        $userObj->save();
        return redirect('admin/all-users')->with('success','User updated successfully..');
        
    }

    public function removeUser(){
        $id = $this->memberObj['id'];
        User::where('id',$id)->delete();
        return redirect('admin/all-users')->with('success','User removed successfully..');
    }

}
