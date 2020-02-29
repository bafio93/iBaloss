<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield("page-title")</title>
        <link rel="stylesheet" href="{{ asset('app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d9af4a4df9.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                @yield("content")
            </div>
        </div>
    </body>
</html>
