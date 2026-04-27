<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Api\AgendamentoController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/api/agendamentos', [AgendamentoController::class, 'index']);
Route::post('/api/agendamentos', [AgendamentoController::class, 'store']);