<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\showController;

/*
|---------------------------------`-----------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/bkdis', function () {
    return view('bkdis');
});
Route::get('/authdis',function(){
    return view('authdis');
});
Route::post('add',[showController::class,'add']);
Route::get('book',[showController::class,'enterbook']);
Route::post('add2',[showController::class,'add2']);
Route::get('authors',[showController::class,'enterauth']);
Route::get('showbook',[showController::class,'showbook']);
Route::get('showauthor',[showController::class,'showauthor']);

