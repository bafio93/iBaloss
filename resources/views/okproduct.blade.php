@extends("layouts.main")
@section("content")
    <div class="container-fluid baf-oops">
        <div>
            <h1>DONE!</h1>
            <p>You have successfully inserted something! :)<br>Click <a href="{{ route('home') }}">here</a> to return to the home page!</p>
        </div>
    </div>
@endsection
