@extends('tests.layouts.base')

@section('title')
    {{ __('tests.delete') }} {{ __('tests.breadcrumbs.answer') }}
@endsection

@section('content')
    <div class="container">
        <h2>Вы действительно хотите удалить вопрос?</h2>
        <div class="row">
            <div class="col-12">
                <p>{{ $answer->text }}</p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-md-6">
                @include('tests.answers.forms.delete')
            </div>
            <div class="col-12 col-md-6">
                <a class="btn btn-success" href="{{ route('answers.index', $test) }}">{{ __('tests.cancel') }}</a>
            </div>
        </div>
    </div>
@endsection
