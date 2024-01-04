<?php

use App\Http\Controllers\GuardController;
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

Route::get('/', function () {
    return view('welcome');
});


// Task 8

//Route::get('testHome',[GuardController::class,'testHome'])->name('testHome');


Route::get('about',[GuardController::class,'about'])->name('about');


Route::get('contact',[GuardController::class,'contact'])->name('contact');


Route::get('service',[GuardController::class,'service'])->name('service');


Route::get('guard',[GuardController::class,'guard'])->name('guard');





//Task 11






Route::get('testHome',[GuardController::class,'testHome'])->middleware('verified')->name('testHome');



Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
