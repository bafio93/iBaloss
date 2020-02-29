@extends("layouts.main")
@section("page-title","index products")
@section("content")
<div class="col">
    <h1>MODIFICA FRUTTA</h1>
    <h4>ID = {{ $product->id }}</h4>
    <a class="btn btn-info" href="{{ route('products.index') }}">Torna alla lista!</a>
</div>
<div class="col">
    <form class="" action="{{ route('products.update', ['product'=> $product->id]) }}" method="post">
        @csrf
        @method('PUT')
        <p><input type="text" name="name" value="{{ $product->name }}" required></p>
        <p><input type="text" name="color" value="{{ $product->color }}" required></p>
        <p><input type="text" name="description" value="{{ $product->description }}" required></p>
        <p><input type="text" name="price" value="{{ $product->price }}" required></p>
        <p><input type="submit" name="invia" value="Modifica oggetto!"></p>
    </form>
</div>
@endsection
