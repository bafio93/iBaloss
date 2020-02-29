@extends("layouts.main")
@section("page-title","index products")
@section("content")
<div class="col">
    <h1>LISTA PRODOTTI</h1>
    <p><a class="btn btn-success" href="{{ route('products.create') }}">CREA UN NUOVO OGGETTO</a></p>
</div>
<div class="col">
    <ul class="list-group">
        @forelse($products as $product)
        <li class="list-group-item list-group-item-dark">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>PRODOTTO: {{ $product->name }}</p>
                        <p>COLORE: {{ $product->color }}</p>
                        <p>DESCRIZIONE: {{ $product->description }}</p>
                        <p>COSTO: {{ $product->price }}€</p>
                    </div>
                    <div class="col">
                        <!-- <p><a class="btn btn-success" href="{{ route('products.create') }}">CREA OGGETTO</a></p> -->
                    </div>
                </div>
            </div>
        </li>
        @empty
        <li class="list-group-item list-group-item-warning"> Nessun prodotto! </li>
        @endforelse
    </ul>
</div>
@endsection
