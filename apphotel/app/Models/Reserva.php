<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable = [
        'idclie',
        'idfun',
        'numquarto',
        'valdia',
        'dtentrada',
        'dtsaida',
        'valtotal',
        'situacao'
        //nomes do mesmo jeito que está na tabela
    ];
}
