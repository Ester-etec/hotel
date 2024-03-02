<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showformularioCadastroFuncionario(Request $request) {
        return view("formularioCadastroFuncionario");
    }

    public function cadFuncionario(Request $request){

        $dadosValidosF = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'funcao' => 'string|required'
            //required = não pode deixar em branco

        ]);

        Funcionario::create($dadosValidosF);
        return Redirect::route('home');
        
    }
}
