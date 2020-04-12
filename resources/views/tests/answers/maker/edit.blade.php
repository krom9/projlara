@extends('tests.layouts.base')

@section('title')
    {{ __('tests.edit') }} {{ __('tests.breadcrumbs.answer') }}
@endsection

@section('content')
    <div class="container">
        @include('tests.answers.forms.edit')
    </div>
@endsection
