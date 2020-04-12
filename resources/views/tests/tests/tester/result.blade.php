@extends('tests.layouts.base')

@section('title')
    {{ $test->name }}
@endsection

@section('content')
    <div class="container">
        <h1>{{ $test->name }}</h1>
        <h2>Results</h2>
        <h3 class="pt-3 pb-1">{{ $result }}</h3>
        <p>{{ $resultDescription }}</p>
    </div>
@endsection
