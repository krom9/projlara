<h2>{{ __('tests.edit') }} {{ __('tests.breadcrumbs.result') }}</h2>
{!! Form::open(['url' => route('results.update', [$test, $result]), 'method' => 'patch']) !!}
    @include('tests.results.forms.fields')
    <div class="form-group">
        {!! Form::submit(__('tests.edit'), ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}
