@extends('tests.layouts.base')

@section('title')
    {{ __('tests.add') }} {{ __('tests.breadcrumbs.result') }}
@endsection

@section('content')
    <div class="container">
        @include('tests.results.forms.create', $test)
    </div>
@endsection
