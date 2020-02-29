@extends("layouts.main")
@section("page-title","index products")
@section("content")
<div class="col">
    <h1>CREAZIONE FRUTTA</h1>
</div>
<div class="col">
    <form class="" action="{{ route('products.store') }}" method="post">
        @csrf
        <p><input type="text" name="name" value="" placeholder="name" required></p>
        <p><input type="text" name="color" value="" placeholder="color" required></p>
        <p><input type="text" name="description" value="" placeholder="description" required></p>
        <p><input type="text" name="price" value="" placeholder="price" required></p>
        <p><input type="submit" name="invia" value="Crea oggetto!"></p>
    </form>
</div>
@endsection
