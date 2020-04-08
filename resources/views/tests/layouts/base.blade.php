<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', trans('tests.title'))</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

@include('tests.layouts.includes.nav.index')

<main role="main">
    <div class="container">
        <div class="jumbotron">
            @yield('content')
        </div>
    </div>
</main>

@include('tests.layouts.includes.footer')

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>