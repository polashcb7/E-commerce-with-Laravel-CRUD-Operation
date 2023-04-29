<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public static $brand;

    public static function saveBrand($request){
        if ($request->default_database_id){
            self::$brand = Brand::find($request->default_database_id);
        }
        else{
            self::$brand = new Brand();
        }


        self::$brand->brand_id = $request->brand_id;
        self::$brand->brand_name = $request->brand_name;
        self::$brand->save();
    }
}
