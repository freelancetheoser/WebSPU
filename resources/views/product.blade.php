<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css','resources/js/app/js'])
    </head>
    <body>
        @include('layout.navbar')
        @include('layout.menu')
        <h1 class="text-center text-4xl font-bold uppercase">product</h1>
        <div class="grid grid-cols-3 place-items-center lg">
            @include('layout.card.post')
            @include('layout.card.post')
            @include('layout.card.post')
            @include('layout.card.post')
            @include('layout.card.post')
            @include('layout.card.post')
            @include('layout.card.post')
        </div>
        @include('layout.footer')
    </body>
</html>
