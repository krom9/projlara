<h2>Editing test</h2>

{!! Form::open(['url' => route('tests.update', $test), 'method' => 'patch']) !!}
    @include('tests.tests.forms.fields')
    <div class="form-group">
        {!! Form::submit('Edit', ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}