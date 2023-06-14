<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login.index',[
            'tittle'=>'Login',
            'active'=>'login'
        ]);
    }
    public function authenticate(Request $request){
        dd($request);
        $credentials= $request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        
        if( Auth::attempt($credentials)){
            $request->session()->regenarate();
            return redirect()->intended('/product');
        }

   
    }
}
