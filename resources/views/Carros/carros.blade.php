@extends('Carros/MasterCarros')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome:</th>
      <th scope="col">Marca:</th>
      <th scope="col">Ano de Criação:</th>
      <th scope="col">Fipe:</th>
      <th scope="col">Categoria:</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($carros as $carro )
     <tr>
      <td>{{ $carro->id }}</td>
      <td>{{ $carro->nome }}</td>
      <td>{{ $carro->marca }}</td>
      <td>{{ $carro->ano_criacao }}</td>
      <td>{{ $carro->fipe }}</td>
      <td>{{ $carro->categoria->nome }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection