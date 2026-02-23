<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;
use App\Models\Idea;


// index
Route::get('/ideas', [IdeaController::class, 'index']);

// create
Route::get('/ideas/create', [IdeaController::class, 'create']);

// store
Route::post('/ideas', [IdeaController::class, 'store']);

// show single idea
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);

// edit
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);

// update idea
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);

// destroy
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);

Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
