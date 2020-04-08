@extends('tests.layouts.base')

@section('title')
    {{ $test->name }}
@endsection

@section('content')
    <div class="container">
        <h1>{{ $test->name }}</h1>
        <div class="row">
            @foreach($answers as $answer)
                <div class="col-12">
                    <h2 class="text-center m-auto font-weight-bold py-3">
                        {{ $answer->text }}
                    </h2>
                    <div class="row">
                        @include('tests.answers.forms.write')
                    </div>
                </div>
            @endforeach
        </div>
        {{ $answers->links() }}
    </div>
@endsection
