<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PedidoController;

Route::post('/pedidos', [PedidoController::class, 'store']);