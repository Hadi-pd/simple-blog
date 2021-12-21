<?php

use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\PostController;
use App\Http\Controllers\Panel\UserController;
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
    return view('landing');
})->name('landing');

Route::get('/dashboard', function () {
    return view('panel.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/post/{id}',function($id){
    return view('post');
})->name('post.show');

// Route::get('/profile', fn() => 'profile')->name('profile');

Route::middleware('auth')->get('/profile', function () {
    return 'profile';
})->name('profile');

Route::middleware(['auth', 'admin'])->prefix('/panel')->group(function() {
    Route::resource('/users', UserController::class)->except(['show']);
    Route::resource('/categories', CategoryController::class)->except(['show', 'create']);
    Route::resource('/posts', PostController::class)->except(['show']);

});
require __DIR__.'/auth.php';
