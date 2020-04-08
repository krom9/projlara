@extends('tests.layouts.base')

@section('title')
    Edit test
@endsection

@section('content')
    <div class="container">
        @include('tests.layouts.includes.breadcrumbs', ['items' => $breadcrumbs])
        @include('tests.tests.forms.edit')
    </div>
@endsection
