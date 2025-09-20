<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::get('/', [CommentController::class, 'index']);
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

