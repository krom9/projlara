<h2>Adding answer</h2>

{!! Form::open(['url' => route('answers.store', $test)]) !!}
    @include('tests.answers.forms.fields')
    <div class="form-group">
        {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}
