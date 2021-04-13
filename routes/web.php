<?php

use App\Http\Controllers\LangController;
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
Route::get('/', [LangController::class, 'index']);
Route::get('/chips1/{name}', function () {
     return view('product');
});
Route::get('/chips2/{name}', function () {
     return view('product1');
});
Route::get('/chips3/{name}', function () {
     return view('product2');
});
Route::get('/chips4/{name}', function () {
     return view('product3');
});
Route::get('/chips5/{name}', function () {
     return view('product4');
});
Route::get('/chips6/{name}', function () {
     return view('product5');
});
Route::get('/chips7/{name}', function () {
     return view('product6');
});
Route::get('/chips8/{name}', function () {
     return view('product7');
});
Route::get('/chips9/{name}', function () {
     return view('product8');
});
Route::get('/chips10/{name}', function () {
     return view('product9');
});
Route::get('/chips11/{name}', function () {
     return view('product10');
});
Route::get('/chips12/{name}', function () {
     return view('product11');
});






Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
