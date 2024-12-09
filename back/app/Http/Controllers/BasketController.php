<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\Order;
use App\Models\BasketPayload;
use App\Events\OrderCreated;

use Illuminate\Support\Facades\Log;

class BasketController extends Controller
{

    public function addToCart(Request $req) {

        /** request should contain:
         * 
         *  product_id
         *  quantity
         * 
         */

        $user = $req->user();

        if(isset($user)) {
            $user_id = $user->id;

            $basket = Basket::firstOrCreate(
                ['user_id' => $user_id]
            );
            
        } else {
            $basket = Basket::firstOrCreate(
                ['session_id' => $req->session()->getId()]
            );
            
        }
           
        $basket = Basket::where('id', $basket->id)->with('products_payload.payload.parent_product')->first();

        if($req->quantity == 0) {
            BasketPayload::where([
                ['basket_id', '=', $basket->id],
                ['product_id', '=', $req->product_id],     
            ])->delete();
        } else {
            $basket_payload = BasketPayload::updateOrCreate(['basket_id' => $basket->id, 'product_id' => $req->product_id], ['quantity' => $req->quantity]);
        }


        $found = false;
        foreach($basket->products_payload as $key => $product) {
            if($product->product_id == $req->product_id) {
                $found = $key;
            }
        }

        Log::info(json_encode($basket));

        if(gettype($found) === "integer") {
            if($req->quantity == 0) {
                unset($basket->products_payload[$found]);

                Log::info(json_encode($basket->products_payload));

                return $basket; 
            }
            $basket->products_payload[$found]->quantity = $req->quantity;
        } else {
            $basket->products_payload->push($basket_payload);
        }

        return $basket;
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
