@extends('app')
@section('content')     
       
  <h1 class="mb-5">
    Endereços Cadastrados
  </h1>

  <a class="btn btn-success" href="{{route('adicionar')}}">
    Adicionar CEP
  </a>

  @if(session('sucesso'))
    <div class="alert alert-success" role="alert">
      {{session('sucesso')}}
    </div>
  @endif

  @if(session('erro'))
    <div class="alert alert-danger" role="alert">
      {{session('erro')}}
    </div>
  @endif

  <table class="table mt-5">
    
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
        </tr>
      @endforeach
    </tbody>

  </table>

@endsection
    