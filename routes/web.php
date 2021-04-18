<?php

use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactForm;
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
Route::post("/contactform", [ContactForm::class, 'create'])->name('contactform.store');

Route::get('/', [LangController::class, 'index']);

Route::get('/chips 1', function () {
     return view('product1');
})->name('chips1');

Route::get('/chips 2', function () {
     return view('product2');
})->name('chips2');

Route::get('/chips 3', function () {
     return view('product3');
})->name('chips3');

Route::get('/chips 4', function () {
     return view('product4');
})->name('chips4');

Route::get('/chips 5', function () {
     return view('product5');
})->name('chips5');

Route::get('/chips 5', function () {
     return view('product5');
})->name('chips5');

Route::get('/chips 6', function () {
     return view('product6');
})->name('chips6');

Route::get('/chips 7', function () {
     return view('product7');
})->name('chips7');

Route::get('/chips 8', function () {
     return view('product8');
})->name('chips8');

Route::get('/chips 9', function () {
     return view('product9');
})->name('chips9');

Route::get('/chips 10', function () {
     return view('product10');
})->name('chips10');

Route::get('/chips 11', function () {
     return view('product11');
})->name('chips11');

Route::get('/chips 12', function () {
     return view('product12');
})->name('chips12');

Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
