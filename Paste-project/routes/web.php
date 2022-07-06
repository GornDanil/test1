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

use App\Http\Controllers\PasteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
Route::post(
    '/paste/submit', 
    [ ContactController::class, 'submit' ]
)->name('paste-form');

Route::name('user.')->group(function(){

    Route::view('/private', 'private')->middleware('auth')->name('private');

    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');

    
    Route::post('/registration', [RegisterController::class, 'save']);
});

