<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    //

    public function __contruct(){
    	parent::__contruct();
    }

    public function laravel(){
    	return view('laravel',["ret_info"=>[1]]);
    }
}
