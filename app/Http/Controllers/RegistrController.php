<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use App\Rules\TttuValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class RegistrController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect(route('blank')); 
        }
        $data=Department::all();
        return view('registration',['departments'=>$data]);
    }

    public function save(Request $request){
        if(Auth::check()){
            return redirect(route('blank')); 
        }
        $this->validate(request(),[
            'fio'=>'required',
            'department_id'=>'required',
            'сathedra_id'=>'required',
            'email'=>[
                'required',
                new TttuValidation()
            ],
            'password'=>'required'
        ]);
        $user= User::create([
            'fio'=>request()->fio,
            'department_id'=>request()->department_id,
            'сathedra_id'=>request()->сathedra_id,
            'email'=>request()->email,
            'password'=>request()->password
        ]);
        if($user){
            Auth::login($user);
            return redirect(route('blank'));
        }
        return redirect(route('login'))->withErrors([
            'formError'=>'Произошла ошибка'
        ]);
    }
}

