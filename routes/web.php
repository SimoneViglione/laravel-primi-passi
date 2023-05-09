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

    $hello_world = 'Hello World!';
    $icon = "fa-solid fa-earth-europe";

    $data = [
        'hello_world'=>$hello_world,
        'icon'=>$icon
    ];

    return view('home', $data);
});
