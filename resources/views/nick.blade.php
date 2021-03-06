<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" href="/css/nick.css">

        <title>Pat's Burger Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body>
      <div id="app">

        <div class="container">
            <div class="name-box center">
                hello, {{$name}}!
            </div>
        </div>

      </div>
      <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
