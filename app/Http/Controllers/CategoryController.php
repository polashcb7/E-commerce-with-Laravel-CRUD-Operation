<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function saveCategory(Request $request){
        Category::savaCategory($request);

        return redirect('/manage-category')->with('message','Successfully Entered');
    }
    public function manageCategory(){
        return view('admin.category.manage-category',[
            'categories'=>Category::all()
        ]);
    }
    public function editCategory($id){
        return view('admin.category.edit-category',[
            'category'=>Category::find($id)
        ]);
    }
    public function deleteCategory(Request $request){
        $category= Category::find($request->category_id);
        if ($category->image){
            unlink($category->image);
        }
        $category->delete();
        return redirect('/manage-category');
    }


}
