@extends('tests.layouts.base')

@section('title')
    {{ __('users.users') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ __('users.users') }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">{{ __('users.fields.name') }}</th>
                        <th scope="col" class="text-center">{{ __('users.fields.email') }}</th>
                        <th scope="col" class="text-center">{{ __('users.fields.role') }}</th>
                    </tr>
                    </thead>

{{--                    <tbody>--}}
{{--                    @foreach($users as $user)--}}
{{--                        <tr>--}}
{{--                            <th scope="row">{{ $loop->iteration }}</th>--}}
{{--                            <td>--}}
{{--                                {{ $user->name }}--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                {{ $user->email }}--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                {{ $user->role->name }}--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <a class="btn btn-warning" href="{{ route('users.edit', $user) }}">{{ __('tests.edit') }}</a>--}}
{{--                                <a class="btn btn-danger" href="{{ route('users.confirm', $user) }}">{{ __('tests.delete') }}</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('users.create') }}">{{ __('tests.add') }}</a>
            </div>
        </div>
    </div>
@endsection
