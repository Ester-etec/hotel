<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero',
        'tipo',
        'valor',
        //nomes do mesmo jeito que está na tabela
    ];
}
