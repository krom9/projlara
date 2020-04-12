<h2>{{ __('tests.add') }} {{ __('tests.breadcrumbs.test') }}</h2>
{!! Form::open(['url' => route('tests.store')]) !!}
    @include('tests.tests.forms.fields')
    <div class="form-group">
        {!! Form::submit(__('tests.add'), ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}
