@extends('tests.layouts.base')

@section('title')
    Edit test
@endsection

@section('content')
    <div>
        @include('tests.tests.forms.edit')
    </div>
@endsection
