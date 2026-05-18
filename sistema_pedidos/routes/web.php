<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PedidoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/sacola', function () {
    return view('sacola');
});

Route::post('/pedidos', [PedidoController::class, 'store']);
