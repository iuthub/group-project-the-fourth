<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;

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

Route::get('/project1', function()
{
    return view('project1');
});
Route::get('/project2', function()
{
    return view('project2');
});
Route::get('/project3', function()
{
    return view('project3');
});
Route::get("/blog",[ArticleController::class,'articles']);
Route::get("detail/{id}",[ArticleController::class,'detail']);
Route::post('add_to_cart',[ArticleController::class,'addToCart']);
Route::get('cartlist',[ArticleController::class,'cartList']);

