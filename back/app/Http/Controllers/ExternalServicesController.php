<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Laravel\Socialite\Facades\Socialite;

use App\Models\User;

class ExternalServicesController extends Controller
{
    public function redirect() {

        $parameters = ['access_type' => 'offline'];
     
        return Socialite::driver('google')->with($parameters)->redirect()->getTargetUrl();
        //
    }

    public function callback() {
        $user = Socialite::driver('google')->user();

        Log::info(json_encode($user));
        
        $user = User::updateOrCreate([
            'google_id' => $user->id
        ],
        [
            'name' => $user->name,
            'email' => $user->email,
            'password' => str::password(12),
        ]);

        Auth::login($user);

        return redirect(env('FRONTEND_URL').'/lk');

        // header('Set-Cookie: token='.$user->token.'; expires=Wed, 28 Aug 2024 16:55:20 GMT; Max-Age=600000; path=/; domain=localhost; samesite=lax');
        // header('Location:'.env("FRONTEND_URL").'/lk');
        // exit;

        // return json_encode($user);
    }

    public function checkuser(Request $req) {
        // $response = Http::post('https://www.googleapis.com/auth/userinfo.profile?access_token='.$req->token, [

        // ]);



        $response = Http::withHeaders([
            'Authorization' => 'Bearer'.$req->token,
        ])
        ->get('https://www.googleapis.com/oauth2/v1/userinfo'); //?alt=json&access_token='.$req->token

        Log::info($req->token);
        Log::info($response);
    }
}

