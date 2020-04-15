@extends('tests.layouts.base')

@section('title')
    {{ __('tests.tests') }}
@endsection

@section('content')
    <div>
        <h1 class="display-4 font-weight-bolder">{{ __('tests.tests') }}</h1>
        <p class="lead">
        @auth
            @if(auth()->user()->role_id === 1)
                <a href="{{ route('tests.index') }}">Попробуйте</a>
                пройти любой тест и Вы изнаете свои возможности.
            @elseif(auth()->user()->role_id === 2)
                Посмотрите
                <a href="{{ route('tests.index') }}">свои</a>
                тесты. Также Вы можете
                <a href="{{ route('tests.create') }}">создать</a>
                новый тест.
            @else
                Вы можете
                <a href="{{ route('tests.index') }}">редактировать контент</a>
                или
                <a href="{{ route('users.index') }}">изменить данные о пользователях</a>.
            @endif
        @else
                Здесь вы найдете тесты для проверки своих знаний и возможностей.
                Чтобы воспользоваться этой возможностью, просто
                <a href="{{ route('register') }}">зарегистриуйтесь</a>
                или
                <a href="{{ route('login') }}">авторизуйтесь</a>
                на нашем сайте.
        @endauth
        </p>
    </div>
@endsection
