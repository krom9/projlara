@extends('tests.layouts.base')

@section('title')
    {{ $test->name }}
@endsection

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <h1>{{ $test->name }}</h1>
                <div>
                    <p>{{ $test->description }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 py-3">
                <p>
                    Редактировать
                    <a href="{{ route('answers.index', $test) }}">
                        вопросы с ответами</a>.
                </p>
                <p>
                    Редактировать
                    <a href="{{ route('results.index', $test) }}">
                    результаты</a>.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6">
                <a class="btn btn-warning" href="{{ route('tests.edit', $test) }}">{{ __('tests.edit') }}</a>
            </div>
            <div class="col-12 col-md-6">
                <a class="btn btn-danger" href="{{ route('tests.confirm', $test) }}">{{ __('tests.delete') }}</a>
            </div>
        </div>

    </div>
@endsection
