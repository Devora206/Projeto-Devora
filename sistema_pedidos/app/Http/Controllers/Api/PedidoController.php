<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function store(Request $request)
    {
        $pedido = Pedido::create([
            'itens' => json_encode($request->itens),
            'total' => $request->total
        ]);

        return response()->json([
            'message' => 'Pedido salvo com sucesso',
            'pedido' => $pedido
        ]);
    }
}