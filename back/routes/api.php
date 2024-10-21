<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/check-auth', function (Request $request) {
        if ($request->user('sanctum')) {
            $response = $request->user();
            $response = [
                'user' => $response,
                'isAuth' => true
            ];
            return $response;
            // $request->user('sanctum')->id
        } else {
            $response = $request->session()->getId();
            $response = [
                'session_id' => $response,
                'isAuth' => false
            ];
            return $response;
            // return $request->session()->get('key');
        }
});

Route::get('/cat_attributes/{slug}', 'App\Http\Controllers\CategoriesApiController@category_attrs');

Route::get('/products_in_cat_count/{id}', 'App\Http\Controllers\CategoriesApiController@product_counter');
Route::resource('/categories', 'App\Http\Controllers\CategoriesApiController');

Route::resource('/attributes', 'App\Http\Controllers\AttributesController');

Route::get('/product/{slug}', 'App\Http\Controllers\ProductsApiController@getProd');
Route::resource('/products', 'App\Http\Controllers\ProductsApiController');

Route::get('/brands/{brand}', 'App\Http\Controllers\BrandsApiController@index');

Route::post('/add-to-cart', 'App\Http\Controllers\BasketController@addToCart');
Route::post('/delete-from-cart', 'App\Http\Controllers\BasketController@deleteFromCart');
Route::post('update-cart', 'App\Http\Controllers\BasketController@updateCart');
Route::get('/get-cart', 'App\Http\Controllers\BasketController@getCart');
Route::post('/push-to-cart', 'App\Http\Controllers\BasketController@pushToCart');

Route::post('/make-order', 'App\Http\Controllers\OrderController@makeOrder');
Route::post('/make-order-check', 'App\Http\Controllers\OrderController@makeOrderCheck');
Route::post('/delete_orders', 'App\Http\Controllers\OrderController@deleteOrders');

Route::get('/get-orders', 'App\Http\Controllers\OrderController@getOrders')->middleware('hasrole:admin');
Route::get('/get_user_orders', 'App\Http\Controllers\OrderController@getUserOrders');




// ->middleware(['hasrole:user'])
Route::get('/test', 'App\Http\Controllers\OrderController@test');


//auth things
// Route::post('/register', 'App\Http\Controllers\AuthController@register');
// Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->middleware(['auth:sanctum']);
// Route::post('/login', 'App\Http\Controllers\AuthController@login');


//yookassa things
Route::post('/payments/callback', 'App\Http\Controllers\PaymentController@callback')->name('payment_callback');
Route::post('/payments/create', 'App\Http\Controllers\PaymentController@create');

