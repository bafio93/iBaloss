@extends("layouts.main")
@section("content")
    <div class="baf-home">
        <!-- decommenta: -->
        <!-- <section class="baf-home-jumbo">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="">DIVENTA<br><strong>CAPACE DI FARE COSE CON LARAVEL </strong>(PLS)</h1>
                    </div>
                    <div class="col">
                        <form class="" action="{{ route('store') }}" method="post">
                            @csrf
                            <p><input type="text" name="name" value="" placeholder="name"></p>
                            <p><input type="text" name="color" value="" placeholder="color"></p>
                            <p><input type="text" name="description" value="" placeholder="description"></p>
                            <p><input type="text" name="price" value="" placeholder="price"></p>
                            <p><input type="submit" name="invia" value="Crea oggetto!"></p>
                        </form>
                    </div>
                    <div class="col">
                        <ul>
                            @foreach ($prodotti as $prodotto)
                                <li>Nome prodotto: {{ $prodotto->name }}<br>Prezzo prodotto: {{ $prodotto->price }}€</li><br>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section> -->
    </div>
@endsection
