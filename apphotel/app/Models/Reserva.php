<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable = [
        'codclie',
        'nmclie',
        'numquarto',
        'tpquarto',
        'valdia',
        'dtentrada',
        'dtsaida',
        'situaquarto'
        //nomes do mesmo jeito que está na tabela
    ];
}
