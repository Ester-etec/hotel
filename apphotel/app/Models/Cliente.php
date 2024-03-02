<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email',
        'fone',
        //nomes do mesmo jeito que está na tabela
    ];
}
