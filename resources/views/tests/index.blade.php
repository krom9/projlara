@extends('tests.layouts.base')

@section('title')
    Главная
@endsection

@section('content')
    <div class="container">
        @include('tests.layouts.includes.breadcrumbs', ['items' => $breadcrumbs])
        <h1 class="display-3">Tests</h1>
        @auth
            @if(auth()->user()->role_id === 2)
                <p>
                    Посмотрите
                    <a href="{{ route('tests.index') }}">свои</a>
                    тесты. Также Вы можете
                    <a href="{{ route('tests.create') }}">создать</a>
                    новый тест.
                </p>
            @else
                <a href="{{ route('tests.index') }}">Попробуйте</a>
                пройти любой тест и Вы изнаете свои возможности.
            @endif
        @else
            <div class="container">
                <p>
                    Здесь вы найдете тесты для проверки своих знаний и возможностей.
                    Чтобы воспользоваться этой возможностью, просто
                    <a href="{{ route('register') }}">зарегистриуйтесь</a>
                    или
                    <a href="{{ route('login') }}">авторизуйтесь</a>
                    на нашем сайте.
                </p>
            </div>
        @endauth
    </div>
@endsection
