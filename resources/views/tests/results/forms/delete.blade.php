{!! Form::open(['url' => route('results.destroy', [$test, $result]), 'method' => 'delete']) !!}
    <div class="form-group">
        {!! Form::submit(__('tests.delete'), ['class' => 'btn btn-danger']) !!}
    </div>
{!! Form::close() !!}
