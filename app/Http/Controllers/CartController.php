<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use  Gloudemans\Shoppingcart\Facades\Cart;

use App\Product;

use Illuminate\Http\Request;
class CartController extends Controller
{
    //
    public function index() {
        $cartItems = Cart::content();
        return view('cart.index', compact('cartItems'));
    }
    
    public function addItem($id){
        echo $id;

         $product = Product::find($id);
         Cart::add('$product->pro_name','$id',1,$product->pro_price);
         return back();
    }

    public function destroy($id){
        Cart::remove($id);
        // echo $id;
        return back();
    }

    public function update(Request $request, $id){
       Cart::update($id,$request->qty);
       return back();

    }
}
