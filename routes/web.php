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

Route::get('/my-name', function () {
    echo "Nama saya adalah Kesyza";
});

Route::get('/my-city/{param}', function ($city) {
    echo "Saya berasal dari " .$city;
});

Route::get('/my-fullname/{nama}/{nrp}', function ($nama, $nrp) {
    echo "Nama saya " .$nama ." dan NRP saya " .$nrp;
});
