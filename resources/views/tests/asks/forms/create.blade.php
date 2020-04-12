<h2>{{ __('tests.add') }} {{ __('tests.breadcrumbs.ask') }}</h2>

{!! Form::open(['url' => route('asks.store', [$test, $answer])]) !!}
    @include('tests.asks.forms.fields')
    <div class="form-group">
        {!! Form::submit(__('tests.add'), ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}


