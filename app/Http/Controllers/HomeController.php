<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        return view('front.home');
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $categories=Category::all();
        return view('front.home');
    }
    public function shop()
    {
        $products=\App\Product::all();
        $categories=Category::all();
        return view('front.shop',compact(['categories','products']));  
    }

    public function product_details($id){
        $products = \App\Product::findOrFail($id);
        return view('front.product_details', compact('products'));
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function search(Request $request)
    {
        $search = $request->site_search;
        if($search==''){
            return view('front.shop');
        }else{
            $products= DB::table('products')->where('pro_name', 'like', '%' . $search . '%')->paginate(2);
            return view('front.shop',['msg'=>'Results: ' . $search], compact('products'));
        }
    }
}
