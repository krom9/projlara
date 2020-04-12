@extends('tests.layouts.base')

@section('title')
    {{ __('tests.add') }} {{ __('tests.breadcrumbs.answer') }}
@endsection

@section('content')
    <div class="container">
        @include('tests.answers.forms.create', $test)
    </div>
@endsection
