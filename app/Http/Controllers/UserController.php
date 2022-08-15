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
}