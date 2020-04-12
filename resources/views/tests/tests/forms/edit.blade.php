<h2>{{ __('tests.edit') }} {{ __('tests.breadcrumbs.test') }}</h2>
{!! Form::open(['url' => route('tests.update', $test), 'method' => 'patch']) !!}
    @include('tests.tests.forms.fields')
    <div class="form-group">
        {!! Form::submit(__('tests.edit'), ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}
