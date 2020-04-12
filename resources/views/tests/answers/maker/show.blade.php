@extends('tests.layouts.base')

@section('title')
    {{ __('tests.edit') }} {{ __('tests.breadcrumbs.answer') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $answer->text }}</h1>
                <div>
                    <p>{{ $answer->test->name }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <h2 class="m-auto">{{ __('tests.asks') }}</h2>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">{{ __('tests.breadcrumbs.ask') }}</th>
                        <th scope="col" class="text-center"> {{ __('tests.fields.mark') }}</th>
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
                                <a class="btn btn-danger" href="{{ route('asks.confirm', [$test, $answer, $ask]) }}">{{ __('tests.delete') }}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4">
                <a class="btn btn-primary" href="{{ route('asks.create', [$test, $answer]) }}">{{ __('tests.add') }} {{ __('tests.breadcrumbs.ask') }}</a>
            </div>
            <div class="col-12 col-md-4">
                <a class="btn btn-warning" href="{{ route('answers.edit', [$test, $answer]) }}">{{ __('tests.edit') }} {{ __('tests.breadcrumbs.answer') }}</a>
            </div>
            <div class="col-12 col-md-4">
                <a class="btn btn-danger" href="{{ route('answers.confirm', [$test, $answer]) }}">{{ __('tests.delete') }} {{ __('tests.breadcrumbs.answer') }}</a>
            </div>
        </div>
    </div>
@endsection
