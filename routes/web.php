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

    $data = [
        'user' => $user,
        'user2' => $user2,     
    ];


    return view('home', $data);
})->name('home');


Route::get('/about', function(){
    return view('about');
})->name('about');


Route::get('/contact', function(){

    $contact_info = [
     'phone' => 0035653757,
     'email' => 'example@about.com',
     'addresses' => ['Main Str.2', 'Brooklyn, 23', 'Uptown Str. 12'],
     'city' => 'New York'
    ];
    
    return view('contact', $contact_info);
})->name('contact');

