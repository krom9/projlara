@extends('tests.layouts.base')

@section('title')
    {{ __('tests.add') }} {{ __('tests.breadcrumbs.test') }}
@endsection

@section('content')
    <div>
        @include('tests.tests.forms.create')
    </div>
@endsection
