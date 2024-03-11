@extends('layout')
@section('content')

<div class="container fixed mt-5">
<form class="row g-3" method="Post" action="{{route('envio-banco-reserva')}}">
  @csrf
  <<div class="col-md-3">
    <label for="inputIdFuncionario" class="form-label">Código do Funcionário:</label>
    <input type="number" class="form-control" id="inputIdFuncionario" name="idfuncionario">
  </div>

  <div class="col-md-3">
    <label for="inputIdCliente" class="form-label">Código do Cliente:</label>
    <input type="number" class="form-control" id="inputIdCliente"  name="idcliente" >
  </div>

  <div class="col-md-2">
    <label for="inputNumQuarto" class="form-label">Número do Quarto:</label>
    <input type="number" class="form-control" id="inputNumQuarto" name="numquarto" >
  </div>

  <div class="col-md-4">
    <label for="inputValDiaria" class="form-label">Valor da Diária:</label>
    <input type="number" class="form-control" id="inputValDiaria" readonly name="valdiaria" >
  </div>
  <div class="col-md-3">
    <label for="inputDtEntrada" class="form-label">Data Entrada:</label>
    <input type="date" class="form-control" id="inputDtEntrada" name="dtentrada" >
  </div>
  <div class="col-md-3">
    <label for="inputDtSaida" class="form-label">Data Saída:</label>
    <input type="date" class="form-control" id="inputDtSaida" name="dtsaida" >
  </div>
  <div class="col-md-3">
  <label for="inputValorTotal" class="form-label">Valor Total:</label>
  <div class="input-group mb-3">
  <span class="input-group-text">R$</span>
  <input type="text" class="form-control" name="valortotal" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
</div>
  </div>
  <div class="col-md-5">
  <label for="inputSituacaoPag" class="form-label" >Situação do pagamento:</label>
<select class="form-select" name="situacaopag" aria-label="Default select example">
<option selected value="Pendente">Pendente</option>
<option value="Pago">Pago</option>
</select>
  </div>
    <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
@endsection