@extends('tests.layouts.base')

@section('title')
    {{ __('tests.results') }}
@endsection

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <h1>{{ $test->name }}</h1>
            </div>
        </div>

        <div class="row">
            <h2 class="m-auto">{{ __('tests.results') }}</h2>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">{{ __('tests.fields.text') }}</th>
                        <th scope="col" class="text-center">{{ __('tests.fields.min') }} {{ __('tests.fields.mark') }}</th>
                        <th scope="col" class="text-center">{{ __('tests.fields.max') }} {{ __('tests.fields.mark') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $result)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                <a href="{{ route('results.edit', [$test, $result]) }}">
                                    {{ $result->text }}
                                </a>
                            </td>
                            <td>{{ $result->min }}</td>
                            <td>{{ $result->max }}</td>
                            <td>
                                <a class="btn btn-danger" href="{{ route('results.confirm', [$test, $result]) }}">{{ __('tests.delete') }}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4">
                <a class="btn btn-primary" href="{{ route('results.create', $test) }}">{{ __('tests.add') }} {{ __('tests.breadcrumbs.result') }}</a>
            </div>
        </div>
    </div>
@endsection
