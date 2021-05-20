<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

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

Route::get('/login', function () {
    return view('login');
});
Route::view('/register','register');
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::get('/contactus', [ContactController::class,'contact' ]);
Route::post('/send-message', [ContactController::class,'sendEmail' ])->name('contact.send');

Route::post("/login",[UserController::class, 'login']);
Route::post("/register",[UserController::class, 'register']);


Route::view("/facts",'facts');
Route::view("/mission",'services');
Route::view("/aboutus",'aboutus');

Route::get("/",[BlogController::class, 'index']);

