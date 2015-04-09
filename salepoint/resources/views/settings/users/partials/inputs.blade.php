<div class="col-md-10 col-md-offset-1">
    <div class="form-group">
        {!! Form::label('name', trans('users.name')) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email',  trans('users.email')) !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'example@example.com']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password',  trans('users.password')) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    @yield('password_confirm')
    <div class="form-group">
        {!! Form::label('image',  trans('users.image')) !!}
        {!! Form::file('image', ['class' => 'form-control']) !!}
    </div>
</div>