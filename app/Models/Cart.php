<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    private static $cart;

    protected $casts = [
        'price' => 'integer',
        'quantity' => 'integer',
    ];

    public static function addToCart($request){
        $checkCart = Cart::where('username',$request->username)
            ->where('product_id',$request->product_id)
            ->first();
        if($checkCart){
            $checkCart->quantity += $checkCart->quantity;
            $checkCart->total_price = $checkCart->quantity * $checkCart->price;
            $checkCart->save();
        }
        else {
            self::$cart = new Cart();
            self::$cart->product_id = $request->product_id;
            self::$cart->price = $request->product_price;
            self::$cart->product_name = $request->product_name;
            self::$cart->image = $request->product_image;
            self::$cart->username = $request->username;
            self::$cart->quantity = $request->quantity;
            self::$cart->total_price = self::$cart->quantity * self::$cart->price;
            self::$cart->save();
        }
    }

    public static function updateCart($request){
        $id = $request->id;
        self::$cart = Cart::find($id);
        self::$cart->quantity=self::$cart->quantity+1;
        self::$cart->total_price=self::$cart->quantity * self::$cart->price;
        self::$cart->save();
    }
    public static function subtractCart($request){
        $id = $request->id;
        self::$cart = Cart::find($id);
        self::$cart->quantity=self::$cart->quantity-1;
        self::$cart->total_price=self::$cart->quantity * self::$cart->price;
        self::$cart->save();
    }
}
