<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\Order;
use App\Models\BasketPayload;
use App\Events\OrderCreated;

class BasketController extends Controller
{

    public function addToCart(Request $req) {

        /** request should contain:
         * 
         *  product_id
         *  quantity
         * 
         */

        $user_id = $req->user()->id;

        if(isset($user_id)) {
            $basket = Basket::firstOrCreate(
                ['user_id' => $user_id]
            );
        } else {
            $basket = Basket::firstOrCreate(
                ['session_id' => $req->session()->getId()]
            );
        }
           
        $basket = $basket->with('products_payload.payload.parent_product')->first();

        $basket_payload = BasketPayload::updateOrCreate(['basket_id' => $basket->id, 'product_id' => $req->product_id],
        ['quantity' => $req->quantity]);

        return $basket_payload;

        //check if user already have this product in cart
        // $basket_payload = BasketPayload::where('basket_id', $basket->id)->where('product_id', $req->product_id)->first();
        // if($basket_payload) {
        //     $basket_payload->quantity = $req->quantity;
        //     $basket_payload->save();          
        // } else { //else creating it
        //     $basket_payload = BasketPayload::create([
        //         'basket_id' => $basket->id,
        //         'product_id' => $req->product_id,
        //         'quantity' => $req->quantity,
        //     ]);
        //     $basket->products_payload->push($basket_payload);
        // }

        // return $basket;

        // $isAuth = false;
        // $user_id = 0;
        // $session_id = '';
        
        // if ($req->user('sanctum')) {
        //     $isAuth = true;
        //     $user_id = $req->user('sanctum')->id;
        // } else {
        //     $session_id = $req->session()->getId();
        // }

        // // creating basket in db if its not created
        // $basket = Basket::where('user_id', $user_id)->orWhere('session_id', $session_id)->with('products_payload.payload.parent_product')->first();
        // if($basket == null) {
        //     if($isAuth) {
        //         $basket = Basket::create([
        //             'user_id' => $user_id,
        //         ]);
        //     } else {
        //         $basket = Basket::create([
        //             'session_id' => $session_id,
        //         ]);
        //     } 
        // }



        // //check if user already have this product in cart
        // $basket_payload = BasketPayload::where('basket_id', $basket->id)->where('product_id', $req->product_id)->first();
        // if($basket_payload) {
        //     $basket_payload->quantity = $req->quantity;
        //     $basket_payload->save();          
        // } else { //else creating it
        //     $basket_payload = BasketPayload::create([
        //         'basket_id' => $basket->id,
        //         'product_id' => $req->product_id,
        //         'quantity' => $req->quantity,
        //     ]);
        //     $basket->products_payload->push($basket_payload);
        // }

        // return $basket;
        //return response(null, 204);
    }

    public function deleteFromCart(Request $req) {
        $basket_id = Basket::where('user_id', $req->user('sanctum')->id)->first()->id;

        BasketPayload::where('basket_id', $basket_id)->whereIn('product_id', $req->product_id)->delete();

        return 'deleted';
    }

    public function getCart(Request $req) {
        
        $isAuth = $req->user('sanctum') ? true : false;


        if($isAuth) {
            $basket = Basket::where('user_id', $req->user('sanctum')->id)->with('products_payload.payload.parent_product:id,slug,title')->first();
        } else {
            $basket = Basket::where('session_id', $req->session()->getId())->with('products_payload.payload.parent_product:id,slug,title')->first();         
        } 
        unset($basket->created_at, $basket->user_id, $basket->session_id);

        
        return $basket;
    }

    public function updateCart(Request $req) {

        if ($req->user('sanctum')) {  
            $user_id = $req->user('sanctum')->id;
        } else {
            return 'unauth';
            $session_id = $req->session()->getId();
        }

        $basket_id = Basket::where('user_id', $user_id)->first()->id;

        $basket_payload = BasketPayload::where('basket_id', $basket_id)->where('product_id', $req->product_id)
        ->update(['quantity' => $req->quantity]);

    }


    //push many products to cart at once
    public function pushToCart(Request $req) {

        $user_id = $req->user('sanctum')->id;
        $cart_id = Basket::where('user_id', $user_id)->first();

        if(!$cart_id) {
            $cart_id = Basket::create([
                'user_id' => $user_id,
            ])->id;
        }

        $localStorageBasket = $req->basket;
        foreach($localStorageBasket['products_payload'] as &$product) {
            unset($product['payload']);
        };
        unset($product);

        // return $req->basket['products_payload'];
        // $product_ids = array_map(function($value) {
        //     return $value['product_id'];
        // }, $req->basket['products_payload']);

        BasketPayload::upsert($localStorageBasket['products_payload'], uniqueBy: ['product_id', 'basket_id'], update: ['quantity']);

        
    }


}
