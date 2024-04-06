@extends('layout')
@section('content')

<div class="container fixed mt-5">
<form class="row g-3" method="Post" action="{{route('alterar-funcionario', $registrosFuncionarios->id)}}">
@method('put')
@csrf

  <div class="col-md-12">
    <label for="inputNome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="inputNome" value="{{old('nome',$registrosFuncionarios->nome)}}" name="nome" placeholder="Paulo da Silva">
  </div>
  <div class="col-md-12">
    <label for="inputEmail" class="form-label">E-mail:</label>
    <input type="email" class="form-control" id="inputEmail" value="{{old('email',$registrosFuncionarios->email)}}" name="email" placeholder="Paulo@gmail.com">
  </div>
  <div class="col-12">
    <label for="inputFuncao" class="form-label">Funcao:</label>
    <input type="tel" class="form-control" id="inputFuncao" value="{{old('funcao',$registrosFuncionarios->funcao)}}" name="funcao" placeholder="Recepcionista">
  
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>
</div>
@endsection