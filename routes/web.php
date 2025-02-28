<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class,'getAbout']);

Route::get('blog/{slug}',[BlogController::class, 'getSingle']) ->name('blog.single')->where('slug','[\w\d\-\_]+');
Route::get('blog',[BlogController::class, 'getIndex'])->name('blog.index');

Route::resource('posts', PostController::class);


