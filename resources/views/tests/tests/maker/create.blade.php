@extends('tests.layouts.base')

@section('title')
    {{ __('tests.add') }} {{ __('tests.breadcrumbs.test') }}
@endsection

@section('content')
    <div class="container">
        @include('tests.tests.forms.create')
    </div>
@endsection
