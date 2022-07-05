<?php

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
    return view('home');
})->name('home');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/paste', function () {
    return view('paste');
})->name('paste');

use App\Http\Controllers\ContactController;
Route::post(
    '/paste/submit', 
    [ ContactController::class, 'submit' ]
)->name('paste-form');