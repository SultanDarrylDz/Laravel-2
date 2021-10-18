<?php

use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PengarangController;
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

Route::get('index', function () {
    return view('menu.index');
});
Route::get('post', function () {
    return view('menu.post');
});
Route::get('about', function () {
    return view('menu.about');
});
Route::get('contact', function () {
    return view('menu.contact');
});

Route::prefix('admin')->group(function (){
    Route::get('/',function(){
        return view('admin.index');
    });
});

Route::prefix('admin')->group(function () {
    Route::resource('admin', AdminController::class);
    Route::resource('book', BookController::class);
    Route::resource('pengarang', PengarangController::class);
}); 