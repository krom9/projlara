@extends('tests.layouts.base')

@section('title')
    {{ __('tests.edit') }} {{ __('users.user1') }}
@endsection

@section('content')
    <div class="container">
        @include('dashboard.users.forms.edit')
    </div>
@endsection
