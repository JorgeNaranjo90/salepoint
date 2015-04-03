<div class="form-group">
    {!! Form::label('name',  trans('paramPacs.Name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control  requiered_field']) !!}

    {!! Form::label('methodType',  trans('paramPacs.MethodType')) !!}
    {!! Form::text('methodType', null, ['class' => 'form-control ']) !!}

    {!! Form::label('urlWebService',  trans('paramPacs.UrlWebService')) !!}
    {!! Form::text('urlWebService', null, ['class' => 'form-control ']) !!}

    {!! Form::label('nameSpace',  trans('paramPacs.NameSpace')) !!}
    {!! Form::text('nameSpace', null, ['class' => 'form-control ']) !!}

    {!! Form::label('userPac',  trans('paramPacs.UserPac')) !!}
    {!! Form::text('userPac', null, ['class' => 'form-control ']) !!}

    {!! Form::label('passwordPac', trans('paramPacs.PasswordPac')) !!}
    {!! Form::text('passwordPac', null, ['class' => 'form-control ']) !!}

    {!! Form::label('certificateLink',  trans('paramPacs.CertificateLink')) !!}
    {!! Form::text('certificateLink', null, ['class' => 'form-control ']) !!}

    {!! Form::label('active',  trans('paramPacs.Activate')) !!}
    {!! Form::text('active', null, ['class' => 'form-control ']) !!}

</div>



