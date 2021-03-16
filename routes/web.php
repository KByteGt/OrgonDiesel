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
Route::prefix('lubricantes')->group(function () {
    Route::get('/', [\App\Http\Controllers\LubricantController::class, 'index'])->name('lubricants');
    Route::get('/{code}', [\App\Http\Controllers\LubricantController::class, 'show'])->name('lubricants.show');
});

//Diesel inyections route
Route::prefix('inyeccion')->group(function () {
    Route::get('/')->name('inyections');
});

//Turbos route
Route::prefix('turbos')->group(function () {
    Route::get('/')->name('turbos');
});


Route::post('/email', [\App\Http\Controllers\ContactFormController::class, 'store'])->name('sendMailContactForm');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

