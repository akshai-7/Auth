<?php

use App\Http\Controllers\Auth\Registercontroller;
use App\Http\Controllers\Logincontroller;
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
Route::view('register','auth.register')->middleware('guest');
Route::post('store',[Registercontroller::class,'store']);
Route::view('home','home')->middleware('auth');
Route::view('login','auth.login')->middleware('guest')->name('login');
Route::post('authenticate',[Logincontroller::class,'authenticate']);
Route::get('logout',[Logincontroller::class,'logout']);
