{!! Form::open(['url' => route('asks.destroy', [$test, $answer, $ask]), 'method' => 'delete']) !!}
    <div class="form-group">
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    </div>
{!! Form::close() !!}