<h2>Adding ask</h2>

{!! Form::open(['url' => route('asks.store', [$test, $answer])]) !!}
    @include('tests.asks.forms.fields')
    <div class="form-group">
        {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}


