<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/service', function(){
    return view('service');
});

Route::get('/portofolio', function(){
    return view('portofolio');
});

Route::post('/message', [MessageController::class, 'store']);

Auth::routes([
    'register'=>false
]);

Route::get('/home', [MessageController::class, 'index'])->name('home')->middleware('auth');
