<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.add-product',[
            'categories'=>Category::all(),
            'brands'=>Brand::all()
        ]);
    }
    public function saveProduct(Request $request){
        Product::saveProuct($request);
        return redirect('/manage-product');
    }
    public function manageProduct(){
        return view('admin.product.manage-product',[
            'products' => Product::all()
        ]);
    }
    public function editProduct($id){
        return view('admin.product.edit-product',[
            'products' => Product::find($id),
            'categories'=>Category::all(),
            'brands'=>Brand::all(),
        ]);
    }
    public function updateProduct(Request $request){
        Product::saveProduct($request);
        return redirect(route('manage.product'));
    }
    public function statusProduct($id){
        Product::statusProduct($id);
        return back();
    }
    public function deleteProduct(Request $request){
        $product=Product::find($request->product_id);
        if ($product->image){
            unlink($product->image);
        }
        $product->delete();
        return redirect('/manage-product');
    }


}
