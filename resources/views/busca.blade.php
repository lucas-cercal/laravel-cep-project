@extends('app')
@section('content')     

  <h1 class="mb-5">Buscar CEP</h1>

    <form action="{{route('buscar')}}" method="GET">

    @if(session('erro'))
    <div class="alert alert-danger mt-2" role="alert">
      {{session('erro')}}
    </div>
  @endif

      <div class="form-group">
        <label>CEP</label>
        <input type="text" class="form-control" name="cep" placeholder="Digite o seu CEP">
      </div>
      
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection