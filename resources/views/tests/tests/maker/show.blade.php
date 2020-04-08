@extends('tests.layouts.base')

@section('title')
    {{ $test->name }}
@endsection

@section('content')
    <div class="container">
        @include('tests.layouts.includes.breadcrumbs', ['items' => $breadcrumbs])
        <div class="row">
            <div class="col-12">
                <h1>{{ $test->name }}</h1>
                <div>
                    <p>{{ $test->description }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <h2 class="m-auto">Список вопросов</h2>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Answer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($test->answers as $answer)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                <a href="{{ route('answers.show', [$test, $answer]) }}">
                                    {{ $answer->text }}
                                </a>
                            </td>
                            <td>
                                @include('tests.answers.forms.delete', [$test, $answer])
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4">
                <a class="btn btn-primary" href="{{ route('answers.create', $test) }}">Add answer</a>
            </div>
            <div class="col-12 col-md-4">
                <a class="btn btn-warning" href="{{ route('tests.edit', $test) }}">Edit test</a>
            </div>
            <div class="col-12 col-md-4">
                @include('tests.tests.forms.delete')
            </div>
        </div>
    </div>
@endsection
