@extends('layout')
@section('content')

<div class="container fixed mt-5">
<form class="row g-3" method="Post" action="{{route('envia-banco-cliente')}}">
@csrf

  <div class="col-md-12">
    <label for="inputNome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Paulo da Silva">
  </div>
  <div class="col-md-12">
    <label for="inputEmail" class="form-label">E-mail:</label>
    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Paulo@gmail.com">
  </div>
  <div class="col-2">
    <label for="inputFone" class="form-label">Fone:</label>
    <input type="tel" class="form-control" id="inputFone" name="fone" placeholder="11 5698-8988">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
@endsection