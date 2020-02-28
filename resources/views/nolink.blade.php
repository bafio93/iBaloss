@extends("layouts.main")
@section("content")
    <div class="container-fluid baf-oops">
        <div>
            <h1>OOPS!</h1>
            <p>It seems that this page doesn't exist yet! Click <a href="{{ route('home_page') }}">here</a> to return to the home page!</p>
        </div>
    </div>
@endsection
