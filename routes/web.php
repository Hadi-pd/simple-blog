<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\EditorUploadController;
use App\Http\Controllers\Panel\PostController;
use App\Http\Controllers\Panel\UserController;
use App\Http\Controllers\Panel\CommentController;

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
    Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
    Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
});
Route::middleware(['auth', 'author'])->prefix('/panel')->group(function() {
    Route::resource('/posts', PostController::class)->except(['show']);
    Route::post('/editor/upload', [EditorUploadController::class, 'upload'])->name('editor-upload');
});

//Route::post('/editor/upload', [EditorUploadController::class, 'upload'])->name('editor-upload');

require __DIR__.'/auth.php';
