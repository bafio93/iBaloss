@extends("layouts.main")
@section("page-title","index products")
@section("content")
<div class="col">
    <h1>CREAZIONE FRUTTA</h1>
</div>
<div class="col">
    <form class="" action="{{ route('products.store') }}" method="post">
        @csrf
        <p><input type="text" name="name" value="" placeholder="name"></p>
        <p><input type="text" name="color" value="" placeholder="color"></p>
        <p><input type="text" name="description" value="" placeholder="description"></p>
        <p><input type="text" name="price" value="" placeholder="price"></p>
        <p><input type="submit" name="invia" value="Crea oggetto!"></p>
    </form>
</div>

@endsection
