@extends('tests.layouts.base')

@section('title')
    {{ __('tests.edit') }} {{ __('tests.breadcrumbs.result') }}
@endsection

@section('content')
    <div class="container">
        @include('tests.results.forms.edit')
    </div>
@endsection
