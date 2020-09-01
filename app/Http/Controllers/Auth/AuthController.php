<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request){
        $data = User::where('email', $request->email)->firstOrFail();
        if($data){
            if(Hash::check($request->password, $data->password)){
                return redirect('/home');
            }
        }
        return redirect('/login')->with('message', 'Email atau Password salah');
    }
}
