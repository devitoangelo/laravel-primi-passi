<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home.blade');
// });






Route::get('home', function () {

$data = [

    'name'=> 'angelo',
    'lastname'=> 'devito',
] ;

    return view('home', $data);
});



Route::get('about', function () {
    return view('about');
});