<h2>Adding test</h2>

{!! Form::open(['url' => route('tests.store')]) !!}
    @include('tests.tests.forms.fields')
    <div class="form-group">
        {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}