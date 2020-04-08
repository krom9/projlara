@extends('tests.layouts.base')

@section('title')
    Edit {{ $answer->id }}
@endsection

@section('content')
    <div class="container">
        @include('tests.layouts.includes.breadcrumbs', ['items' => $breadcrumbs])
        <div class="row">
            <div class="col-12">
                <h1>{{ $answer->text }}</h1>
                <div>
                    <p>{{ $answer->test->name }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <h2 class="m-auto">Список возможных ответов</h2>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Ask</th>
                        <th scope="col" class="text-center">Mark</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($answer->asks as $ask)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                <a href="{{ route('asks.edit', [$test, $answer, $ask]) }}">
                                    {{ $ask->text }}
                                </a>
                            </td>
                            <td class="text-center">{{ $ask->mark }}</td>
                            <td>
                                @include('tests.asks.forms.delete', [$test, $answer, $ask])
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4">
                <a class="btn btn-primary" href="{{ route('asks.create', [$test, $answer]) }}">Add ask</a>
            </div>
            <div class="col-12 col-md-4">
                <a class="btn btn-warning" href="{{ route('answers.edit', [$test, $answer]) }}">Edit answer</a>
            </div>
            <div class="col-12 col-md-4">
                @include('tests.answers.forms.delete')
            </div>
        </div>
    </div>
@endsection
