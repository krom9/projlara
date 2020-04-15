@extends('tests.layouts.base')

@section('title')
    {{ $test->name }}
@endsection

@section('content')
    <div>
        <h1>{{ $test->name }}</h1>
        <h2 class="py-3">{{ __('tests.results') }}</h2>
        <h3 class="pt-3 pb-1">{{ $result }}</h3>
        <p class="pt-4 font-weight-bold">{{ $resultDescription }}</p>
    </div>
@endsection
