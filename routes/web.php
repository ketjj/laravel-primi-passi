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

    $user = "John Smith";
    $user2 = 'Jane Smith';
    $address = 'Main Str.2';
    $city = 'NY';

    $data = [
        'user' => $user,
        'user2' => $user2,
        'address' => $address,
        'city' => $city
    ];


    return view('home',$data);
})->name('home');


Route::get('/about', function(){
    return view('about');
})->name('about');


Route::get('/contact', function(){
    return view('contact');
})->name('contact');

