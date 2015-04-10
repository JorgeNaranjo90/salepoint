<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('name', trans('users.name')) !!}
        {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>trans('users.user_name')]) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('email', trans('users.email')) !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>trans('users.user_email')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('password', trans('users.password')) !!}
        {!! Form::password('password', ['class' => 'form-control','placeholder'=>trans('users.user_password')]) !!}
    </div>
    @yield('password_confirm')
</div>
<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('type',trans('users.type_user')) !!}
        {!! Form::select('type',$type,null,['class' => 'form-control requiered_field']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('image', trans('users.image')) !!}
        {!! Form::file('image', ['class' => 'form-control']) !!}
    </div>
</div>







