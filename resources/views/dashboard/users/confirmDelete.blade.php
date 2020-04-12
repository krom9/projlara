@extends('tests.layouts.base')

@section('title')
    {{ __('tests.delete') }} {{ __('users.user1') }}
@endsection

@section('content')
    <div class="container">
        <h2>Вы действительно хотите удалить пользователя?</h2>
        <div class="row">
            <div class="col-12">
                <p>{{ $user->name }}</p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-md-6">
                @include('dashboard.users.forms.delete')
            </div>
            <div class="col-12 col-md-6">
                <a class="btn btn-success" href="{{ route('users.index') }}">{{ __('tests.cancel') }}</a>
            </div>
        </div>
    </div>
@endsection
