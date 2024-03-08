<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quarto;

class QuartoController extends Controller
{
    public function showHome() {
        return view("home");
    }

    public function showFormularioCadastroQuarto(Request $request) {
        return view("formularioCadastroQuarto");
    }

    public function cadQuarto(Request $request){
        $dadosValidos = $request->validate([
            'numero' => 'integer|required',
            'tipo' => 'string|required',
            'valor' => 'double|required'
            //required = não pode deixar em branco

        ]);

        Quarto::create($dadosValidos);
        return Redirect::route('home');
        
    }
}

