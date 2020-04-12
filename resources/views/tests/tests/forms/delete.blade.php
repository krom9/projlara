{!! Form::open(['url' => route('tests.destroy', $test), 'method' => 'delete']) !!}
    <div class="form-group">
        {!! Form::submit(__('tests.delete'), ['class' => 'btn btn-danger']) !!}
    </div>
{!! Form::close() !!}
