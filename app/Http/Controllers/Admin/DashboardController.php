<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Common,stdClass;

class DashboardController extends Controller
{
    public function dashboard(){
        return redirect('admin/feedback-forms');
        return view('admin.dashboard.dashboard');
    }

    public function addCategory(){
        return view('admin.dashboard.add-category');
    }

    public function storeCategory(Request $request){
        $request->validate([
            'category_name'=>'required',
            'description'=>'max:250'
        ]);
        $catObj = new Category();
        $catObj->category_name = $request->category_name;
        $catObj->description = $request->description;
        $catObj->status = 1;
        $catObj->save();
        return redirect('admin/all-categories')->with('success','Category added successfully...');
    }

    public function allCategories(){
        $data['categories'] = Category::where('status',1)->paginate(50);
        return view('admin.dashboard.all-categories',$data);
    }

    public function editCategory(){
        $id = $this->memberObj['id'];
        $data['category'] = Category::find($id);
        $inputObj = new stdClass();
        $inputObj->params = 'id='.$id;
        $inputObj->url = url('admin/update-category');
        $encLink = Common::encryptLink($inputObj);
        $data['updateLink'] = $encLink;
        return view('admin.dashboard.edit-category',$data);
    }

    public function updateCategory(Request $request){
        $request->validate([
            'category_name'=>'required',
            'description'=>'max:250'
        ]);
        $id = $this->memberObj['id'];
        $catObj= Category::find($id);
        $catObj->category_name = $request->category_name;
        $catObj->description = $request->description;
        $catObj->save();
        return redirect('admin/all-categories')->with('success','Category updated successfully...');
    }

    public function removeCategory(){
        $id = $this->memberObj['id'];
        $catObj= Category::find($id);
        $catObj->status = 2;
        $catObj->save();
        return redirect('admin/all-categories')->with('success','Category removed successfully...');
    }

}
