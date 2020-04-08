@extends('tests.layouts.base')

@section('title')
    Make test
@endsection

@section('content')
    <div class="container">
        @include('tests.layouts.includes.breadcrumbs', ['items' => $breadcrumbs])
        @include('tests.asks.forms.create')
    </div>
@endsection
