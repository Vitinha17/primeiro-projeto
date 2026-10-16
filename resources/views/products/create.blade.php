@extends('products.layout')

@section('content')

<h2>Criar Produto</h2>

<form actionoducts.store') }}
    @csrf

    <div>
        <strong>Nome:</strong>
        <input type="text" name="name">
    </div>

    <br>

    <div>
        <strong>Detalhe:</strong>
        <textarea name="detail"></textarea>
    </div>

    <br>

    <div>
        <button type="submit">Guardar</button>
    </div>
</form>

@endsection