@extends('tests.layouts.base')

@section('title')
    Edit test
@endsection

@section('content')
    <div class="container">
        @include('tests.tests.forms.edit')
    </div>
@endsection
