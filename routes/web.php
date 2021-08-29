<?php

use App\Http\Controllers\ClientController;
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

Route::get('client',[ClientController::class,'index']);
Route::post('client',[ClientController::class,'store']);
Route::get('client/{id}',[ClientController::class,'show']);
Route::delete('client/{id}',[ClientController::class,'delete']);
Route::post('client/{id}',[ClientController::class,'update']);
