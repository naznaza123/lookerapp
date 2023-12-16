<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
public function index(){
    return view('auth.register',[
        "title"=>"register"
    ]);
}
public function store(Request $request){
    $validatedregist=$request->validate([
        'username'=> 'required|max:255|unique:users',
        'email'=> 'required|email|',
        'password'=> 'required|min:5'
    ]);
    $validatedregist['password']=Hash::make($validatedregist['password']);
    $request->session()->flash('success','Registrasi berhasil! Ayo Login');
    User::create($validatedregist);

    return redirect ('/');

}
}
