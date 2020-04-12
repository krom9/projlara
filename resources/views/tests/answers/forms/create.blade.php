<h2>{{ __('tests.add') }} {{ __('tests.breadcrumbs.answer') }}</h2>

{!! Form::open(['url' => route('answers.store', $test)]) !!}
    @include('tests.answers.forms.fields')
    <div class="form-group">
        {!! Form::submit(__('tests.add'), ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}
