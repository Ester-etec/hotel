@extends('layout')
@section('content')

<div class="container fixed mt-5">
<form class="row g-3" method="Post" action="{{route('envia-banco-quarto')}}">
@csrf

  <div class="col-md-2">
    <label for="inputNumero" class="form-label">Número:</label>
    <input type="number" class="form-control" id="inputnumero" name="numero" placeholder="1">
  </div>
  <div class="col-md-12">
    <label for="inputTipo" class="form-label">Tipo:</label>
    <input type="text" class="form-control" id="inputTipo" name="tipo" placeholder="suite">
  </div>
  <div class="col-12">
    <label for="inputValor" class="form-label">Valor:</label>
    <input type="number" class="form-control" id="inputValor" name="valor" placeholder="4000,00">
  
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
@endsection