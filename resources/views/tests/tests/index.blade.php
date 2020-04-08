@extends('tests.layouts.base')

@section('title')
    Tests
@endsection

@section('content')
    <div class="container">
        @include('tests.layouts.includes.breadcrumbs', ['items' => $breadcrumbs])
        <h1>Список тестов</h1>

        <div class="row">
            <div class="col-12">
                @forelse($tests as $test)
                    <p>
                        <a href="{{ route('tests.show', [$test->id]) }}">{{ $test->name }}</a>
                    </p>
                @empty
                    <p>Пока нет тестов</p>
                @endforelse
            </div>
        </div>

        @if(auth()->user()->role_id === 2)
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-primary" href="{{ route('tests.create') }}">Add test</a>
                </div>
            </div>
        @endif
    </div>
@endsection
