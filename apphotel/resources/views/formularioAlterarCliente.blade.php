@extends('layout')
@section('content')

<div class="container fixed mt-5">
<form class="row g-3" method="Post" action="{{route('alterar-cliente', $registrosClientes->id)}}">
@method('put')
@csrf

  <div class="col-md-12">
    <label for="inputNome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="inputNome" value="{{old('nome',$registrosClientes->nome)}}" name="nome" placeholder="Paulo da Silva">
    @error('nome')
    <div class="text-sm-start text-light">*Preencha o campo nome.</div>
    @enderror
  </div>
  
  <div class="col-md-12">
    <label for="inputEmail" class="form-label">E-mail:</label>
    <input type="email" class="form-control" id="inputEmail" value="{{old('email',$registrosClientes->email)}}" name="email" placeholder="Paulo@gmail.com">
    @error('email')
    <div class="text-sm-start text-light">*Preencha o campo email.</div>
    @enderror
   </div>

  <div class="col-3">
    <label for="inputFone" class="form-label">Fone:</label>
    <input type="tel" class="form-control" id="inputFone" value="{{old('fone',$registrosClientes->fone)}}" name="fone" placeholder="11 5698-8988">
    @error('fone')
    <div class="text-sm-start text-light">*Preencha o campo fone.</div>
    @enderror
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>
</div>
@endsection