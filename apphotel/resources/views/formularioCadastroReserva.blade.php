@extends('layout')
@section('content')

<div class="container fixed mt-5">
<form class="row g-3" method="Post" action="{{route('envia-banco-reserva')}}">
@csrf

  <div class="col-md-12">
    <label for="inputCodClie" class="form-label">Código do cliente:</label>
    <input type="text" class="form-control" id="inputCodClie" name="codlie" placeholder="1">
  </div>
  <div class="col-md-12">
    <label for="inputNmClie" class="form-label">Nome do cliente:</label>
    <input type="text" class="form-control" id="inputNmClie" name="nmclie" placeholder="Cecilia">
  </div>
  <div class="col-12">
    <label for="inputNumQua" class="form-label">Número do quarto:</label>
    <input type="text" class="form-control" id="inputNumQua" name="numqua" placeholder="001">
  </div>
  <div class="col-12">
    <label for="inputTipoQua" class="form-label">Tipo do quarto:</label>
    <input type="text" class="form-control" id="inputTipoQua" name="tipoqua" placeholder="suite">
  </div>
  <div class="col-12">
    <label for="inputValDia" class="form-label">Valor da Diaria:</label>
    <input type="text" class="form-control" id="inputValDia" name="valdia" placeholder="001">
  </div>
  <div class="col-12">
    <label for="inputDtEntrada" class="form-label">Data de entrada:</label>
    <input type="date" class="form-control" id="inputDtEntrada" name="dtentrada" placeholder="001">
  </div>
  <div class="col-12">
    <label for="inputDtSaida" class="form-label">Data de saida:</label>
    <input type="date" class="form-control" id="inputDtSaida" name="dtsaida" placeholder="001">
  </div>
  <div class="form-floating">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Situação do quarto:</option>
    <option value="1">Pendente</option>
    <option value="2">Pago</option>
  </select>
</div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
@endsection