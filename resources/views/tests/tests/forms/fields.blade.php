<div class="row">
    <div class="col-sm-12 col-md-6">

        <div class="form-group">
            {!! Form::label('name', __('tests.fields.name')) !!}
            {!! Form::text('name', $test->name ?? null, ['class' => 'form-control']) !!}
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            {!! Form::label('description', __('tests.fields.description')) !!}
            {!! Form::textarea('description', $test->description ?? null, ['class' => 'form-control']) !!}
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
</div>
