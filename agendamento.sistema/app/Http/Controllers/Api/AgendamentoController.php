<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Paciente;

class AgendamentoController extends Controller
{
    public function index()
    {
        return response()->json(
            Agendamento::with('paciente')->get()
        );
    }

    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'servico' => 'required',
            'data' => 'required',
            'hora' => 'required'
        ]);

        $paciente = Paciente::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email
        ]);

        $agendamento = Agendamento::create([
            'paciente_id' => $paciente->id,
            'servico' => $request->servico,
            'data' => $request->data,
            'hora' => $request->hora,
            'observacoes' => $request->observacoes
        ]);

        return response()->json([
            'msg' => 'Agendamento criado com sucesso',
            'data' => $agendamento
        ], 201);
    }
}