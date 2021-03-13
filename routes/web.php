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
    return view('index');
})->name('index');

//Lubricans route
Route::get('/lubricantes', [\App\Http\Controllers\LubricantController::class, 'index'])->name('lubricants');
Route::get('/lubricantes/{category}', [\App\Http\Controllers\LubricantController::class, 'show'])->name('lubricants.category');
Route::get('/lubricantes/{category}/{id}', [\App\Http\Controllers\LubricantController::class, 'showCategorys'])->name('lubricants.product');


Route::post('/email', [\App\Http\Controllers\ContactFormController::class, 'store'])->name('sendMailContactForm');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

