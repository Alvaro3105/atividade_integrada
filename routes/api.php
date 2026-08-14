<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestaoController;

Route::get('/questoes', [QuestaoController::class, 'index']);
Route::get('/questoes/{id}', [QuestaoController::class, 'show']);
Route::post('/questoes', [QuestaoController::class, 'store']);
Route::put('/questoes/{id}', [QuestaoController::class, 'update']);
Route::patch('/questoes/{id}', [QuestaoController::class, 'update']);
Route::delete('/questoes/{id}', [QuestaoController::class, 'destroy']);