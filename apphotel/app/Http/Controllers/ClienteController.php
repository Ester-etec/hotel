<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function showHome() {
        return view("home");
    }

    public function showFormularioCadastroCliente(Request $request) {
        return view("formularioCadastroCliente");
    }

    public function cadCliente(Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
            //required = não pode deixar em branco

        ]);

        Cliente::create($dadosValidos);
        return Redirect::route('home');
        
    }
}