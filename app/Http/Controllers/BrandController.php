<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }
    public function saveBrand(Request $request){
        Brand::saveBrand($request);
        return redirect('/manage-brand')->with('message','Successfully Entered');


    }

    public function manageBrand(){
        return view('admin.brand.manage-brand',[
            'brands'=>Brand::all()
        ]);
    }

    public function editBrand($id){
        return view('admin.brand.edit-brand',[
            'brand'=>Brand::find($id)
        ]);

    }
    public function deleteBrand(Request $request){
        $brand= Brand::find($request->brand_id);
        if ($brand->image){
            unlink($brand->image);
        }
        $brand->delete();
        return redirect('/manage-brand');
    }

}
