<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\StaticContentController::class, 'welcome'])->name('home');
Route::get('/profile', [\App\Http\Controllers\StaticContentController::class, 'profile'])->name('profile');
Route::get('/dashboard', [\App\Http\Controllers\StaticContentController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [\App\Http\Controllers\StaticContentController::class, 'faq'])->name('faq');
Route::get('/blog', [\App\Http\Controllers\StaticContentController::class, 'blog'])->name('blog');

Route::get('/posts/{page}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts');
