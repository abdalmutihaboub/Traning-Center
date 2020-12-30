<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {

        $http = Http::post(url('/oauth/token'),[
            "grant_type"=>"password",
            "client_id"=>2,
            "client_secret"=>"msuKqxno8CBq4oF021KthKdb63IJPHyOOKjBu008",
            "password"=>$request->password,
            "username"=>$request->email,
        ]);
        $token= $http->body();
        return response()->json($token);
    }


    public function register(Request $request)
    {

           $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 1,
            'password' => bcrypt($request->password),
        ]);

        return response()->json($newUser);
    }
}
