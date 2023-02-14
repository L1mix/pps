<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        if(Auth::check()){
            return redirect(route('blank')); 
        }
        $formFields= $request->only(['email','password']);
        if(Auth::attempt($formFields)){
            return redirect()->intended(route('blank'));
        }
        return redirect(route('login'))->withErrors([
            'email'=>'Не удалось авторизоваться '
        ]);
    }
    public function logout(){
        Auth::logout();
    return redirect(route('/'));
    }
    public function checkLogin (){
        if(Auth::check()){
            return redirect(route('blank')); 
        }
        return view('login');
    }
}

