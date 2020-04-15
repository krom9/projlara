@extends('tests.layouts.base')

@section('title')
    {{ __('tests.answers') }}
@endsection

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <h1>{{ $test->name }}</h1>
            </div>
        </div>

        <div class="row">
            <h2 class="m-auto">{{ __('tests.answers') }}</h2>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">{{ __('tests.breadcrumbs.answer') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($answers as $answer)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                <a href="{{ route('answers.show', [$test, $answer]) }}">
                                    {{ $answer->text }}
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{ route('answers.confirm', [$test, $answer]) }}">{{ __('tests.delete') }}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('answers.create', $test) }}">{{ __('tests.add') }} {{ __('tests.breadcrumbs.answer') }}</a>
            </div>
        </div>
    </div>
@endsection
