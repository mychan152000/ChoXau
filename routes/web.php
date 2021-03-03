<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front/home');
});
Route::get('redirect', 'YourController@redirect');

Route::get('/about', function(){
    return view('front/about');
});

Route::get('/shop',function(){
    return view('front/shop');
});


Route::get('/contact', function(){
    return view('front/contact');
});
Route::get('/products', function(){
    return view('front/shop');
});

Route::get('/product_details/{id}','HomeController@product_details');

Route::get('/cart', 'CartController@index');

Route::get('/cart/addItem/{id}', 'CartController@addItem');

Route::get('/shop', 'HomeController@shop');
//Route::get('/shop', 'Homecontroller@shop');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home', 'HomeController@contact')->name('contactus');

Route::group(['prefix' => 'admin','middleware'=>['auth','admin']],
    function(){
        Route::get('/',function(){
            return view('admin.index');
        })->name('admin.index');

        Route::POST('admin/store', 'AdminController@store');
        Route::get('/admin','AdminController@index');
        Route::resource('product', 'ProductsController');
    }
);

Route::get('/cart/addItem/{id}','HomeController@product_details');

Route::get('cart/addItem/{id}','CartController@addItem');

Route::get('/cart/remove/{id}','CartController@destroy');

Route::put('/cart/update/{id}', 'CartController@update');

Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/checkout', 'CheckoutController@index');

Route::post('/formvalidate', 'CheckoutController@formvalidate');

Route::group(['middeware'=>'auth'], function(){
    route::get('/checkout','CheckoutController@index');
    route::post('/formvalidate','CheckoutController@formvalidate');
    Route::get('/orders','ProfileController@orders');
    route::get('/address','ProfileController@address');
    route::post('/updateAddress','ProfileController@UpdateAddress');
    route::get('/password', 'ProfileController@updatePassword');
    route::post('/updatePassword','ProfileController@updatePassword');
    route::Get('/profile', function(){
        return view('profile.index');
    });
    route::get('/thankyou', function(){
        return view('/profile.thankyou');
    });
});

Route::post('/search','HomeController@search');