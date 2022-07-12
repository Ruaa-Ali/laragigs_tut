<?php

use Illuminate\Http\Request;
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

// Route::get('/hello', function(){
//     return response('<h1>Not Found</h1>', 404)
//     -> header('Content-Type', 'text/plain');
// });

// // post.php?id=13
// Route::get('/post/{id}', function($id){
//     ddd($id);
//      return response('post' . $id);
//     //  add condition to only take numbers as id
//     // where('name', regex)
//     // name must be == to what's in the route name
// }) -> where('id', '[0-9]+');

// // what is the diff bt this and the one above?
// Route::get('/search', function(Request $request){
//     return $request-> name . ' ' . $request->city;
// });


// die & dump
// dd() shows whatever passed to it and terminate the code
// die, dump & debug
// ddd() full debug