@extends('tests.layouts.base')

@section('title')
    {{ __('tests.delete') }} {{ __('tests.breadcrumbs.result') }}
@endsection

@section('content')
    <div>
        <h2>Вы действительно хотите удалить результат?</h2>
        <div class="row">
            <div class="col-12">
                <p>{{ $result->text }}</p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-md-6">
                @include('tests.results.forms.delete')
            </div>
            <div class="col-12 col-md-6">
                <a class="btn btn-success" href="{{ route('results.index', $test) }}">{{ __('tests.cancel') }}</a>
            </div>
        </div>
    </div>
@endsection
