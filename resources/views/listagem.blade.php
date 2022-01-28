<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Endereços Cadastrados</title>
  </head>
  <body>
    <div class="container">
       <h1 class="mb-5">
           Endereços Cadastrados
       </h1>
       <a class="btn btn-success" href="{{route('adicionar')}}">
            Adicionar CEP
       </a>
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
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
