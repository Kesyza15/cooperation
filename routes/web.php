<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MandatorySavingController;
use App\Http\Controllers\PersonController;
use App\Models\MandatorySaving;

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

Route::get('/customer/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customer/store', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customer/{id}', [CustomerController::class, 'show'])->name('customers.show');
Route::get('/customer', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customer/update', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');

Route::resource('mandatory-saving', MandatorySavingController::class);

// Route::get('/customer/name', [CustomerController::class, 'name']);
// Route::get('/customer/city/{param}', [CustomerController::class, 'city']);
// Route::get('/customer/my-fullname/{nama}/{nrp}', [CustomerController::class, 'fullname']);

// Route::get('/person/index', [PersonController::class, 'index']);
// Route::get('/person/create', [PersonController::class, 'create'])->name('person.create');
// Route::post('/person/store', [PersonController::class, 'store'])->name('person.store');