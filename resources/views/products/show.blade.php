@extends("layouts.main")
@section("page-title","index products")
@section("content")
<div class="col">
    <h1>DETTAGLI FRUTTA</h1>
    <h4>ID = {{ $product->id }}</h4>
    <a class="btn btn-info" href="{{ route('products.index') }}">Torna alla lista!</a>
</div>
<div class="col">
    <ul class="list-group">
        <li class="list-group-item list-group-item-dark">
            NOME: {{ $product->name }}
        </li>
        <li class="list-group-item list-group-item-dark">
            DESCRIZIONE: {{ $product->description }}
        </li>
        <li class="list-group-item list-group-item-dark">
            COLORE: {{ $product->color }}
        </li>
        <li class="list-group-item list-group-item-dark">
            COSTO: {{ $product->price }}
        </li>
        <li class="list-group-item list-group-item-dark">
            CREATO IL: {{ $product->created_at }}
        </li>
        <li class="list-group-item list-group-item-dark">
            MODIFICATO IL: {{ $product->updated_at }}
        </li>
    </ul>
</div>
@endsection
