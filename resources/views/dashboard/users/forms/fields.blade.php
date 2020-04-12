<div class="row">
    <div class="col-sm-12 col-md-6">

        <div class="form-group">
            {!! Form::label('name', __('users.fields.name')) !!}
            {!! Form::text('name', $user->name ?? null, ['class' => 'form-control']) !!}
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            {!! Form::label('email', __('users.fields.email')) !!}
            {!! Form::email('email', $user->email ?? null, ['class' => 'form-control']) !!}
        </div>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            {!! Form::label('password', __('users.fields.password')) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            {!! Form::label('role_id', __('users.fields.role_id')) !!}
            {!! Form::number('role_id', $user->role_id ?? null, ['class' => 'form-control']) !!}
        </div>
        @error('role_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
</div>
