<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerformanceController;
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

//Route::get('/',[]);
Route::get('/signup',[AuthController::class,'signUpPage'])->name('sign.up');
Route::post('/signup',[AuthController::class,'register'])->name('register');
Route::get('/signin',[AuthController::class,'signInPage'])->name('sign.in');
Route::post('/signin',[AuthController::class,'login'])->name('login');

Route::get('/',[PerformanceController::class,'indexPage']);


Route::get('/logout',function (){
   auth()->logout();
});
