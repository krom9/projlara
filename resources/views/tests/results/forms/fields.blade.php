<div class="row">
    <div class="col-sm-12 col-md-6">

        <div class="form-group">
            {!! Form::label('text', __('tests.fields.text') ) !!}
            {!! Form::textarea('text', $result->text ?? null, ['class' => 'form-control']) !!}
        </div>
        @error('text')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            {!! Form::label('min', __('tests.fields.min').' '.__('tests.fields.mark')) !!}
            {!! Form::number('min', $result->min ?? null, ['class' => 'form-control']) !!}
        </div>
        @error('min')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            {!! Form::label('max', __('tests.fields.max').' '.__('tests.fields.mark')) !!}
            {!! Form::number('max', $result->max ?? null, ['class' => 'form-control']) !!}
        </div>
        @error('max')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
</div>
