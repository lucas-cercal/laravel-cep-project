@extends('app')
@section('content')     

  <h1 class="mb-5">Adicionar CEP</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $errors)
            <li>{{$errors}}</li>
          @endforeach
        </ul>
      </div>
    @endif

  <form action="{{route('salvar')}}" method="POST">
    @csrf
    
    <div class="form-group">
      <label>CEP</label>
      <input type="text" class="form-control" name="cep" value="{{$cep}}">
    </div>
    <div class="form-group">
      <label>Logradouro</label>
      <input type="text" class="form-control" name="logradouro" value="{{$logradouro}}">
    </div>
    <div class="form-group">
      <label>Bairro</label>
      <input type="text" class="form-control" name="bairro" value="{{$bairro}}">
    </div>
    <div class="form-group">
      <label>Localidade</label>
      <input type="text" class="form-control" name="localidade" value="{{$localidade}}">
    </div>
    <div class="form-group">
      <label>Estado</label>
      <input type="text" class="form-control" name="estado" value="{{$estado}}">
    </div>
    <div class="form-group">
      <label>Número</label>
      <input type="text" class="form-control" name="numero">
    </div>
            
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>

  @endsection
