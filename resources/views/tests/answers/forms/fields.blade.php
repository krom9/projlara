<div class="row">
    <div class="col-sm-12 col-md-6">

        <div class="form-group">
            {!! Form::label('text', __('tests.fields.text')) !!}
            {!! Form::textarea('text', $answer->text ?? null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::hidden('test_id', $test->id, ['class' => 'form-control']) !!}
        </div>

        @error('text')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
</div>
