{!! Form::open(['url' => route('answers.destroy', [$test, $answer]), 'method' => 'delete']) !!}
    <div class="form-group">
        {!! Form::submit(__('tests.delete'), ['class' => 'btn btn-danger']) !!}
    </div>
{!! Form::close() !!}
