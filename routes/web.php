<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

Route::get('products', [
    ProductsController::class,
    'index'
]);

Route::resource('posts', PostController::class);

Route::middleware(['auth'])->group(function () {
    Route::post('/like', [LikeController::class, 'toggleLike'])->name('like.toggle');
});

// Route::middleware(['auth'])->group(function () {
//     Route::post('/posts/{post}/like', [LikeController::class, 'likeOrUnlike'])->name('posts.like');
//     // Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');