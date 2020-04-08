<h2>Editing test</h2>

{!! Form::open(['url' => route('asks.store', [$test, $answer, $ask]), 'method' => 'patch']) !!}
    @include('tests.asks.forms.fields')
    <div class="form-group">
        {!! Form::submit('Edit', ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}

