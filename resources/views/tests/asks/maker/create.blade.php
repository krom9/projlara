@extends('tests.layouts.base')

@section('title')
    {{ __('tests.add') }} {{ __('tests.breadcrumbs.ask') }}
@endsection

@section('content')
    <div class="container">
        @include('tests.asks.forms.create')
    </div>
@endsection
