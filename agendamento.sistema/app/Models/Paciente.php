<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['nome', 'telefone', 'email'];

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}