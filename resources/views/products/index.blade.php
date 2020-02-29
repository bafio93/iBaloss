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
                        <p><strong>PRODOTTO:</strong> {{ $product->name }}</p>
                        <p><strong>COSTO:</strong> {{ $product->price }}€</p>
                    </div>
                    <div class="col">
                        <a class="btn btn-info" href="{{ route('products.show',['product' => $product->id]) }}">VISUALIZZA DETTAGLI</a>
                        <a class="btn btn-dark" href="{{ route('products.edit',['product' => $product->id]) }}">MODIFICA OGGETTO</a>
                        <form action="{{ route('products.destroy',['product' => $product->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Elimina oggetto!">
                        </form>
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
