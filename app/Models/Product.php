<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product,$image,$imageNewName,$directory,$imgUrl;

    public static function saveProduct($request){
        if ($request->product_id){
            self::$product = Product::find($request->product_id);
        }
        else{
            self::$product = new Product();
        }

        self::$product->product_name = $request->product_name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        if($request->image){
            if (file_exists(self::$product->image)){
                unlink(self::$product->image);
            }
//            $imageResize = $request->image;
//            $width = 640;
//            $height = 480;
//            Image::make($imageResize)->resize($width,$height);

            self::$product->image = self::getImgUrl($request);
        }


        self::$product->save();

    }

    private static function getImgUrl($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'admin-Asset/product-image/';
        self::$imgUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imgUrl;

    }

    public static function statusProduct($id){
        self::$product =Product::find($id);
        if(self::$product->status == 1){
            self::$product->status = 0;
        }
        else{
            self::$product->status = 1;
        }
        self::$product->save();

    }

}
