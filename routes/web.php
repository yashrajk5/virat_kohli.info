<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/history', [HistoryController::class, 'index']);
Route::get('/details', [DetailsController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
