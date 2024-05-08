<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function registerLayout(){
        return view("auth.register");
    }
    public function loginLayout(){
        return view("auth.login");
    }
    public function register(Request $request){
        $request->validate([
            "username" => "required|min:5",
            "email" => "required|email",
            "password"=> "required|confirmed|min:3",
            "password_confirmation"=> "required"
        ]);
        User::create([
            "username"=> $request->username, 
            "email"=>$request->email,
            "password"=>$request->password
        ]);
        return redirect()->route("loginLayout")->with("success","User berhasil register!");
    }
    public function login(Request $request)
    {
        $request->validate([
            // "username" => "required|min:3",
            "tipeLogin" => "required|min:3",
            "password" => "required",
        ]);

        $loginField = filter_var($request->input("tipeLogin"), FILTER_VALIDATE_EMAIL) ? "email" : "username";

        $credentials = [
            $loginField => $request->input("tipeLogin"),
            "password" => $request->input("password"),
        ];


        if (Auth::attempt($credentials)) {
            return redirect()->route("testpage")->with("success", "User berhasil login!");
        } else {
            Session::flashInput($request->input());
            return redirect()->route("loginLayout")->with("error", "Username, email, atau Password salah!");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("login")->with("success", "User berhasil logout!");
    }
}
