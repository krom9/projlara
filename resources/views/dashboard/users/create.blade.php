@extends('tests.layouts.base')

@section('title')
    {{ __('tests.add') }} {{ __('users.user1') }}
@endsection

@section('content')
    <div class="container">
        @include('dashboard.users.forms.create')
    </div>
@endsection
