<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    private static $order;
    protected $fillable = ['product_id','price','product_name','image','quantity','total_price','username','name','address','phone'];

    public static function saveToOrder($cartItems, $request)
    {




        foreach ($cartItems as $data) {
            self::$order = new Order();

            self::$order->product_id = $data->product_id;
            self::$order->price = $data->price;
            self::$order->product_name = $data->product_name;
            self::$order->image = $data->image;
            self::$order->quantity = $data->quantity;
            self::$order->total_price = $data->total_price;
            self::$order->username = $data->username;
            self::$order->name = $request->name;
            self::$order->address = $request->address;
            self::$order->phone = $request->phone;
            self::$order->save();
        }
    }


}
