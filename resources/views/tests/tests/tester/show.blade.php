@extends('tests.layouts.base')

@section('title')
    {{ $test->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $test->name }}</h1>
                <div>
                    <p>{{ $test->description }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4">
                <a href="{{ route('answers.show', [$test, $answer]) }}">Пройти тест</a>
            </div>
        </div>
    </div>
@endsection
