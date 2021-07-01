<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesContoller;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/messages', [MessagesContoller::class, 'getMessages']);

Route::post('contact/submit', [MessagesContoller::class, 'submit']);



