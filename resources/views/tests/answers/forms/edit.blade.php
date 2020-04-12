<h2>{{ __('tests.edit') }} {{ __('tests.breadcrumbs.answer') }}</h2>

{!! Form::open(['url' => route('answers.update', [$test, $answer])]) !!}
    @include('tests.answers.forms.fields')
    <div class="form-group">
        {!! Form::submit(__('tests.edit'), ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}
