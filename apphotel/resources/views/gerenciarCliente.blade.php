@extends('layout')
@section('content')
<section class="container m-5">
  <h1 class="text-center"> Gerenciar dados do Cliente</h1>
  <div class="container m-5 center">
    <form method="get" action="{{route('gerenciar-cliente')}}">
      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o Nome do Cliente" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
    
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach($registrosClientes as $registroClientesLoop)
      <tr>
        <th scope="row">{{$registroClientesLoop->id}}</th>
        <td>{{$registroClientesLoop->nome}}</td>
        <td>{{$registroClientesLoop->email}}</td>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">E</button>
          </a>
        </td>
        
        <td>
        <form method="POST" action="{{route('/apaga-cliente,$registroClientesLoop->id')}}">
      
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">X</button>
      </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>


@endsection