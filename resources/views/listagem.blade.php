@extends('app')
@section('content')     
       
  <h1 class="mb-5">
    Endereços Cadastrados
  </h1>

  <a class="btn btn-success" href="{{route('adicionar')}}">
    Adicionar CEP
  </a>

  @if(session('sucesso'))
    <div class="alert alert-success mt-2" role="alert">
      {{session('sucesso')}}
    </div>
  @endif

  @if(session('erro'))
    <div class="alert alert-danger mt-2" role="alert">
      {{session('erro')}}
    </div>
  @endif

  <table class="table table-striped mt-5 shadow-lg p-3 mb-5 bg-body rounded">
  
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">CEP</th>
        <th scope="col">Logradouro</th>
        <th scope="col">Bairro</th>
        <th scope="col">Localidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Número</th>
        <th scope="col">Data de criação</th>
        <th scope="col">Remover</th>
      </tr>
    </thead>

    <tbody>
      @foreach($enderecos as $endereco)
        <tr>
          <td>{{$endereco->id}}</td>
          <td>{{$endereco->cep}}</td>
          <td>{{$endereco->logradouro}}</td>
          <td>{{$endereco->bairro}}</td>
          <td>{{$endereco->localidade}}</td>
          <td>{{$endereco->estado}}</td>
          <td>{{$endereco->numero}}</td>
          <td>{{(new DateTime($endereco->created_at)) -> format('d/m/y H:i:s')}}</td>
          <td><a class="btn btn-danger" href="{{route('deletar', [$endereco -> cep])}}">Excluir</a></td>
        </tr>
      @endforeach
    </tbody>

  </table>

@endsection
    