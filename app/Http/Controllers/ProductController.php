<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function index(){
    //     return 'All Product ' .$name;
    // }

    // public function index($name){
    //     return 'All Product ' .$name;
    // }

    // public function index($name=null){
    //     return 'All Product ' .$name;
    // }

    public function index($name=null){
        return 'All Product ' .$name;
    }
}
