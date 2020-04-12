@extends('tests.layouts.base')

@section('title')
    {{ $test->name }}
@endsection

@section('content')
    <div class="container">
        <h1>{{ $test->name }}</h1>
        <div class="row">
            <div class="col-12">
                <h2 class="m-auto font-weight-bold py-3 font-weight-bold">
                    {{ $answer->text }}
                </h2>
                <div class="row">
                    @include('tests.answers.forms.write')
                </div>
            </div>
        </div>
    </div>
@endsection
