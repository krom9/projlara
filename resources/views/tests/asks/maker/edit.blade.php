@extends('tests.layouts.base')

@section('title')
    Edit ask
@endsection

@section('content')
    <div class="container">
        @include('tests.layouts.includes.breadcrumbs', ['items' => $breadcrumbs])
        @include('tests.asks.forms.edit')
    </div>
@endsection
