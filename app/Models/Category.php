<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category;

    public static function savaCategory ($request){

        if ($request->default_database_id){
            self::$category = Category::find($request->default_database_id);
        }
        else{
            self::$category=new Category();
        }



        self::$category->category_id=$request->category_id;
        self::$category->category_name=$request->category_name;
        self::$category->save();
    }
}
