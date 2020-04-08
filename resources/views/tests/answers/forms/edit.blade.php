<h2>Editing answer</h2>

{!! Form::open(['url' => route('answers.update', [$test, $answer])]) !!}
    @include('tests.answers.forms.fields')
    <div class="form-group">
        {!! Form::submit('Edit', ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}