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

    public function mostrarGerenciarFuncionarioId(Funcionario $id){
        return view('formularioAlterarFuncionario',['registrosFuncionarios' => $id]);
     }
 
 
     public function gerenciarFuncionario(Request $request){
         $dadosFuncionario = Funcionario::query();
         $dadosFuncionario->when($request->nome,function($query,$valor){
             $query->where('nome','like','%'.$valor.'%');
         });
 
         $dadosFuncionario = $dadosFuncionario->get();
 
         return view('gerenciarFuncionario',['registrosFuncionarios' => $dadosFuncionario]);
     }
 
 
     public function destroy(Funcionario $id){
 
         $id->delete();
         return Redirect::route('home');
     }
 
 
     public function alterarFuncionarioBanco(Funcionario $id, Request $request){
 
         $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'funcao' => 'string|required'
         ]);
 
         $id->fill($dadosValidos);
         $id->save();
         return Redirect::route('home');
     }
}
