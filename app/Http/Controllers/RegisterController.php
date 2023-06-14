<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('Register.index',[
            'tittle'=>'Register',
            'active'=>'register'
        ]);
    }
    public function store(Request $request){
        // $request->validate([
        //     'name'=>'require|max:255',
        //     'email'=>'required|email|unique:users',
        //     'password'=>'required|min:5'

        // ]);
        // dd('registrasi berhasil');
       $validatedDate= request()->all();
       User::create( $validatedDate);
       $request->session()->flash('success','Reqistration Successfull!');
       return redirect('/login');

     }
}
