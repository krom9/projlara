@extends('tests.layouts.base')

@section('title')
    {{ __('tests.tests') }}
@endsection

@section('content')
    <div class="container">
        <h1>{{ __('tests.tests') }}</h1>

        <test-list :userid="{{ json_encode(auth()->user()->id) }}"></test-list>

        @if(in_array(auth()->user()->role_id, [2, 3]))
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-primary" href="{{ route('tests.create') }}">{{ __('tests.add') }} {{ __('tests.breadcrumbs.test') }}</a>
                </div>
            </div>
        @endif
    </div>
@endsection
