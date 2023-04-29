<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;
use DB;

class EcommerceController extends Controller
{
    public function index(){
        return view('frontEnd.home.home',[
        'products' =>Product::where('status',1)
            ->orderby('id','desc')
            ->take(5)
            ->get()
    ]);
    }
    public function detailsProduct($id){
        return view('frontEnd.product.details-product',[
           'products' => Product::find($id)
        ]);
    }
    public function customerRegister(){
        return view('frontEnd.customer.register');
    }
    public function saveCustomer(Request $request){
        Customer::saveCustomer($request);
        return redirect('/');
    }
    public function customerLogin(){
        return view('frontEnd.customer.login');
    }
    public function customerLoginCheck(Request $request){
        $customerInfo = Customer::where('email',$request->user_name)
            ->orWhere('phone',$request->user_name)
            ->first();
        if ($customerInfo){
            $existingPassword=$customerInfo->password;
            if (password_verify($request->password,$existingPassword)){
                Session::put('customerId',$customerInfo->id);
                Session::put('customerName',$customerInfo->name);
                return redirect('/');
            }
            else{
                return back()->with('message','Please enter a valid password');
            }
        }
        else{
            return back()->with('message','Please Use Valid email or Phone');
        }
    }
    public function customerLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        return back();
    }

    public function addToCart(Request $request){
        //return $request;
        Cart::addToCart($request);
        return back()->with('message','Added To Cart');
    }

    public function seeCart($request){
        //return $request;
        return view('frontEnd.cart.cartDetails',[
            'cartDetails' => Cart::where('username',$request)->get(),
        ]);
    }
    public function deleteCartItem(Request $request){

            $cart_item=Cart::find($request->cart_id);
            $cart_item->delete();
            return back();

    }
    public function plusCart(Request $request){
        //return $request->id;
         Cart::updateCart($request);
         return back();
    }

    public function minusCart(Request $request){
         Cart::subtractCart($request);
         return back();
    }

    public function placeOrder(Request $request){
        //return $request->address;
        $cartItems = Cart::where('username',$request->customerId)->get();

        //return $cartItems;

//        foreach ($cartItems as $data) {
//            echo $data->price;
//        }

        Order::saveToOrder($cartItems,$request);
        Cart::where('username',$request->customerId)->delete();
        return back()->with('message','Successfully placed the Order');







    }
}


//$cartItem = Cart::where('username',$customerId)->get();
//return view('frontEnd.order.order-details',[
//    $cartItem
//]);
