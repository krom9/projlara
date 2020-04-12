<h2>{{ __('tests.add') }} {{ __('users.user1') }}</h2>

{!! Form::open(['url' => route('users.store')]) !!}
    @include('dashboard.users.forms.fields')
    <div class="form-group">
        {!! Form::submit(__('tests.add'), ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}
