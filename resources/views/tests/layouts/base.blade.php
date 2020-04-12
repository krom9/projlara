<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', __('tests.title'))</title>

    <meta name="keywords" content="{{ __('tests.content') }}">
    <meta name="description" content="{{ __('tests.description') }}">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>

<style>
    body {
        padding-top: 4rem;
    }
</style>

<body>

<div id="app" class="">

    @include('tests.layouts.includes.nav.index')

    <main role="main">

        @include('tests.layouts.includes.breadcrumbs', ['items' => $breadcrumbs ?? null])

        <div class="container">
            <div class="jumbotron">
                @yield('content')
            </div>
        </div>
    </main>

</div>

@stack('scripts')

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
