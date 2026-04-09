<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    public function loginForm(){
        return view('login');
    }

    public function login(Request $req){

        $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $req->username)
                    ->where('password', $req->password)
                    ->first();

        if($user){
            Session::put('login', true);
            Session::put('user', $user->username);

            return redirect('/home');
        }

        return back()->with('error', 'Login gagal');
    }

    public function logout(){
        Session::flush();
        return redirect('/login');
    }
}