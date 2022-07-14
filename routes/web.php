<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosaController;
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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/', function () {
    return view('penerimaan-luar');
});
Route::get('/2', function () {
    return view('tab_b');
});
Route::get('/3', function () {
    return view('tab_c');
});
Route::get('/4', function () {
    return view('tab_d');
});



Route::resource('posa', PosaController::class);
