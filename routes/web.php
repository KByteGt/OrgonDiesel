<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\LubricantController;
use \App\Http\Controllers\ContactFormController;
use \App\Http\Controllers\FamiliesController;
use \App\Http\Controllers\CategoriesController;

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
    Route::get('/{category?}', [LubricantController::class, 'index'])
        ->whereNumber('category')
        ->name('lubricants');
    Route::post('/busqueda', [LubricantController::class, 'search'])->name('lubricants.search');
    Route::get('/{code}', [LubricantController::class, 'show'])
        ->whereAlphaNumeric('code')
        ->name('lubricants.show');
});

//Diesel inyections route
Route::prefix('inyeccion')->group(function () {
    Route::get('/')
        ->name('inyections');
});

//Turbos route
Route::prefix('turbos')->group(function () {
    Route::get('/')
        ->name('turbos');
});


Route::post('/email', [ContactFormController::class, 'store'])
    ->name('sendMailContactForm');

Auth::routes(['register' => false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('products', ProductController::class)
        ->except('create', 'edit');
    Route::resource('families', FamiliesController::class)
        ->except('create', 'edit');
    Route::resource('categories', CategoriesController::class)
        ->except('create','edit');
});
