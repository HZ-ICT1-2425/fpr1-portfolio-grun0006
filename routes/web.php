<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\StaticContentController::class, 'welcome'])->name('home');
Route::get('/profile', [\App\Http\Controllers\StaticContentController::class, 'profile'])->name('profile');
Route::get('/dashboard', [\App\Http\Controllers\StaticContentController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [\App\Http\Controllers\StaticContentController::class, 'faq'])->name('faq');
Route::get('/blog', [\App\Http\Controllers\StaticContentController::class, 'blog'])->name('blog');
Route::get('/createfaq', [\App\Http\Controllers\StaticContentController::class, 'createfaq'])->name('createfaq');
Route::post('/createfaqpost', [\App\Http\Controllers\FAQController::class, 'createfaqpost'])->name('createfaqpost');
Route::get('/editfaq/{post}', [\App\Http\Controllers\StaticContentController::class, 'editfaq'])->name('editfaq');
Route::put('/editfaqpost', [\App\Http\Controllers\FAQController::class, 'editfaqpost'])->name('editfaqpost');
Route::get('/deletefaq/{post}', [\App\Http\Controllers\StaticContentController::class, 'deletefaq'])->name('deletefaq');
Route::put('/deletefaqpost', [\App\Http\Controllers\FAQController::class, 'deletefaqpost'])->name('deletefaqpost');

Route::get('/posts/{page}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts');
