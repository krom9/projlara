@extends('tests.layouts.base')

@section('title')
    Edit test
@endsection

@section('content')
    <div class="container">
        @include('tests.answers.forms.edit')
    </div>
@endsection