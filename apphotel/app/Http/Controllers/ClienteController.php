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

    public function mostrarGerenciarClienteId(Cliente $id){
       return view('XXXXXXX',['registrosClientes' => $id]);
    }


    public function gerenciarCliente(Request $request){
        $dadosCliente = Cliente::query();
        $dadosCliente->when($request->nome,function($query,$valor){
            $query->where('nome','like','%'.$valor.'%');
        });

        $dadosCliente = $dadosCliente->get();

        return view('gerenciarCliente',['registrosClientes' => $dadosCliente]);
    }


    public function destroy(Cliente $id){

        $id->delet();
        return Redirect::route('home');
    }


    public function alteraClienteBanco(Cliente $id, Request $request){

        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);

        $id->fill($dadosValidos);
        $id->save();
        return Redirect::route('home');
    }
}
