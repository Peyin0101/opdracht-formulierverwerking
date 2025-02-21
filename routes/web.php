<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('posts/featured', [PostsController::class, 'featuredPosts'])->name('posts.featured');
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostsController::class, 'update'])->name('posts.update');
Route::get('/posts/delete/{post}', [PostsController::class, 'delete'])->name('posts.delete');
Route::delete('/posts/{post}', [PostsController::class, 'destroy'])->name('posts.destroy');