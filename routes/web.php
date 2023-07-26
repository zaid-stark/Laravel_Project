<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\microcontro;

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

Route::get('/',[microcontro::class,'index']);
Route::post('/',[microcontro::class,'store']);

//show data
Route::get('/show',[microcontro::class,'show']);
Route::get('/edit/{id}',[microcontro::class,'edit']);
Route::put('/update/{id}',[microcontro::class,'update']);
