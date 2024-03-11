<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showformularioCadastroReserva(Request $request) {
        return view("formularioCadastroReserva");
    }

    public function cadReserva(Request $request){
        $dadosValidos = $request -> validate([
            'idclie'=> 'integer|required',
            'idfun'=>'integer|required',
            'numquarto'=>'integer|required',
            'valdia'=>'numeric|required',
            'dtentrada'=>'date|required',
            'dtsaida'=>'date|required',
            'valtotal'=>'numeric|required',
            'situacao'=>'string|required'
        ]);

        Reserva::create($dadosValidos);
        return Redirect::route('home');

    }
}
