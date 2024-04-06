@extends('layout')
@section('content')
<section class="container m-5">
    <h1 class="text-center">Gerenciar Dados dos Quarto</h1>
  <div class="container m-5">
    <form method="GET" action="{{route('gerenciar-quarto')}}">
      <div class="row center">
        <div class="col">
          <input type="text" id="numero" name="numero" class="form-control" placeholder="Digite o Número do Quarto" aria-label="First name">
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
        <th scope="col">Número do quarto</th>
        <th scope="col">Tipo do quarto</th>
        <th scope="col">Valor</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($registrosQuartos as $registrosQuartosLoop)
    <tr>
          <th scope="row">{{$registrosQuartosLoop->id}}</th>
          <td>{{$registrosQuartosLoop->numero}}</td>
          <td>{{$registrosQuartosLoop->tipo}}</td>
          <td>{{$registrosQuartosLoop->valor}}</td>
          <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
        <form method="post" action="{{route('apagar-quarto', $registrosQuartosLoop)}}">
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