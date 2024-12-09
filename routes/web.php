<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\nqtSessionController;
use App\Http\Controllers\nqtAccountController;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/nnh-register', function (){
    return view('register');
});
Route::post('/nnh-register', [RegisterController::class, 'RegisterSubmit'])->name('register.submit');

Route::get('/nnh-login',[nnhAccountController::class,'nnhlogin'])->name('nnhaccount.nnhlogin');
Route::post('/nnh-login',[nnhAccountController::class,'nnhloginsubmit'])->name('nnhaccount.nnhloginsubmit');

// Route::get('/nnh-login',[LoginController::class,'index2'])->name('login.index');
// Route::post('/nnh-login',[LoginController::class,'loginSubmit'])->name('login.submit');

Route::get('/session/get', [nnhSessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set', [nnhSessionController::class,'storeSessionData'])->name('session.set');
Route::get('/session/delete', [nnhSessionController::class,'deleteSessionData'])->name('session.delete');