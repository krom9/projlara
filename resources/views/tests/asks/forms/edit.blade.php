<h2>{{ __('tests.edit') }} {{ __('tests.breadcrumbs.ask') }}</h2>

{!! Form::open(['url' => route('asks.store', [$test, $answer, $ask]), 'method' => 'patch']) !!}
    @include('tests.asks.forms.fields')
    <div class="form-group">
        {!! Form::submit(__('tests.edit'), ['class' => 'btn btn-success']) !!}
    </div>
{!! Form::close() !!}

