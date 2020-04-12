@extends('tests.layouts.base')

@section('title')
    {{ __('tests.edit') }} {{ __('tests.breadcrumbs.ask') }}
@endsection

@section('content')
    <div class="container">
        @include('tests.asks.forms.edit')
    </div>
@endsection
