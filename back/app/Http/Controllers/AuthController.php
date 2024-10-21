<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register(Request $req) {
        $cred = $req->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        $cred['password'] = bcrypt($cred['password']);

        $user = User::create($cred);

        $token = $user->createToken('aboba')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response);
    }

    public function logout(Request $req) {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }

    public function login(Request $req) {
        $cred = $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $cred['email'])->first();

        if(!$user || !Hash::check($cred['password'], $user->password)) {
            return response([
                'message' => 'invalid credentials'
            ], 401);
        }

        $token = $user->createToken('aboba')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response);
    }
}
