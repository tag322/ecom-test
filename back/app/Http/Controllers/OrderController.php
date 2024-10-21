<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Events\OrderCreated;

use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function makeOrderCheck(Request $req) {
        $isAuth = $req->user() != null;
        if($isAuth) {
            $order = Order::where('user_id', $req->user()->id)->first();
        }

        if($order ?? false) {
            return 'exists';
        } else {
            $this->makeOrder($req);
        }
    }

    public function makeOrder(Request $request) {
        $user = $request->user('sanctum') ?? null;

        $order = Order::create([
            'basket' => $request->basket,
            'user_id' => $user == null ? null : $user->id
        ]);

        

        OrderCreated::dispatch($order, $user);

        return $order;
    }

    public function getOrders(Request $req) {
        // $user = $req->user(1);


        // return $user;

        // if(!$user->hasRole('admin')) {
        //     abort('403');
        // }

        return Order::select(['id','basket', 'user_id'])->with('user', 'transaction')->get();
    }

    public function getUserOrders(Request $req) {
        $user = $req->user();

        return Order::where('user_id', $user->id)->with('transaction')->get();
    }

    public function deleteOrders(Request $req) {
        if(!$req->user()->hasRole('admin')) {
            abort('403', 'нахуй пошёл');
        }

        DB::table('orders')->whereIn('id', $req->ids)->delete();

        return response()->json('success', 200);
    }



    public function test(Request $req) {
        return $this->test2($req);
    }

    public function test2(Request $req) {
        return $req->user();
    }

    //php artisan queue:work
    //php artisan reverb:start
}

