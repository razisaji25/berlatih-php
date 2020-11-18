<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }
    public function welcome(Request $request){
        $first= $request->first_name;
        $last= $request->last_name;
        // dd($first,$last); cek trows
                
        return view('SelamatDatang',compact('first','last'));
    }
}
