<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Basic Routing
// Route::get('/category',function(){
//     return 'Category';
// });

//Parameter routing
// Route::get('/category/{name}',function($name){
//     return 'Category '.$name;
// });

//Optional Parameters
// Route::get('/category/{name?}',function($name =null){
//     return 'Category '.$name;
// });

//Regular Expression Constraints
// Route::get('/category/{name?}',function($name =null){
//     return 'Category '.$name;
// })->where('name','[a-z A-Z]+');

// Route::get('/product/{id?}',function($id =null){
//     return 'id '.$id;
// })->where('id','[0-9]+');

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return $id  . $name;
// })->where(['id' => '[0-9]+', 'name' => '[a-zA-Z]+']);


//Regular Expression Constraints RouteService Provider

//Global Constraints
Route::get('/category/{name?}',function($name =null){
    return 'Category '.$name;
});

Route::get('/product/{id?}',function($id =null){
    return 'id '.$id;
});


