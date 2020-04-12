<h2>{{ __('tests.edit') }} {{ __('users.user1') }}</h2>

{!! Form::open(['url' => route('users.update', $user), 'method' => 'patch']) !!}
    @include('dashboard.users.forms.fields')
    <div class="form-group">
        {!! Form::submit(__('tests.edit'), ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}
