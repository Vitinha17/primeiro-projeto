@extends('products.layout')

@section('content')

<h2>Produtos</h2>

{{ route('products.create') }}
    Adicionar Produto
</a>

@if ($message = Session::get('success'))
    <p>{{ $message }}</p>
@endif

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Detalhe</th>
    </tr>

    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
    </tr>
    @endforeach

</table>

@endsection