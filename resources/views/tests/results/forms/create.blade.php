<h2>{{ __('tests.add') }} {{ __('tests.breadcrumbs.result') }}</h2>
{!! Form::open(['url' => route('results.store', $test)]) !!}
    @include('tests.results.forms.fields')
    <div class="form-group">
        {!! Form::submit(__('tests.add'), ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}
