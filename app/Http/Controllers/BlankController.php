<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blank;
use Illuminate\Http\Request;

class BlankController extends Controller
{
    public function show(){
        return view('blank');
    }
    public function save(Request $request){

       
        $user= auth()->user();
        
        Blank::create([
            'user_id'=>$user->id,
            'punkt1'=>request()->punkt1,
            'punkt2'=>request()->punkt2,
            'punkt3'=>request()->punkt3,
            'punkt4'=>request()->punkt4
        ]);
        return redirect(route('blank'));
    }
}
