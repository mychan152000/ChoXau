<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\address;
use App\orders;
use App\Product;

class ProfileController extends Controller
{
    //
    public function index(){
        return view('profile.index');
    }
    public function orders(){
        $user_id = Auth::user()->id;
        // 
        $orders = DB::table('orders_product')->leftJoin('products', 'products.id', '=', 'orders_product.product_id')->leftJoin('orders', 'orders.id', '=', 'orders_product.orders_id')->where('orders.user_id', '=', $user_id)->get();
        return view('profile.orders',compact('orders'));

    }
    public function Address(){
        return view('profile.address');
    }

    public function updateAddress(Request $request){
        echo 'here update query for address';
        dd($request->fullname);
    }
    public function Password(){
        return view('profile.updatePassword');
    }

    public function updatePassword(){
        return view('profile.updatePassword');
    }
}
