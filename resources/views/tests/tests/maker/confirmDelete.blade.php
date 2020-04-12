@extends('tests.layouts.base')

@section('title')
    {{ __('tests.delete') }} {{ __('tests.breadcrumbs.test') }}
@endsection

@section('content')
    <div class="container">
        <h2>Вы действительно хотите удалить тест?</h2>
        <div class="row">
            <div class="col-12">
                <p>{{ $test->name }}</p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-md-6">
                @include('tests.tests.forms.delete')
            </div>
            <div class="col-12 col-md-6">
                <a class="btn btn-success" href="{{ route('tests.show', $test) }}">{{ __('tests.cancel') }}</a>
            </div>
        </div>
    </div>
@endsection
