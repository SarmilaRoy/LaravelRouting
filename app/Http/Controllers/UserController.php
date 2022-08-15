<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $welcome='Welcome';

        $wel= array(
            'name'=> 'rafi',
            'age'=> '21'
        );
        return view('user',compact('welcome','wel'));
    }

    public function index1(){
      
        return view('contact');
    }

    public function index3(){
      
        return view('about');
    }
    public function index2(){
      
        return view('welcome');
    }
}