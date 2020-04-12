{!! Form::open(['url' => route('users.destroy', $user), 'method' => 'delete']) !!}
    <div class="form-group">
        {!! Form::submit(__('tests.delete'), ['class' => 'btn btn-danger']) !!}
    </div>
{!! Form::close() !!}
