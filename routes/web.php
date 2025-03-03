<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;


Route::get('/', [PageController::class,'getIndex']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class,'getAbout']);
Route::get('/contact', [PageController::class,'getContact']);
Route::get('/webapp', [ServiceController::class,'getContact']);
Route::get('/seo', [ServiceController::class,'getContact']);
Route::get('/content', [ServiceController::class,'getContact']);

Route::get('rlog/{slug}',[BlogController::class, 'getSingle']) ->name('rlog.single')->where('slug','[\w\d\-\_]+');
Route::get('rlog',[BlogController::class, 'getIndex'])->name('rlog.index');

Route::resource('posts', PostController::class);


