<div class="form-group">
    {!! Form::label('name',  trans('paramPacs.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control  requiered_field']) !!}

    {!! Form::label('methodType',  trans('paramPacs.methodType')) !!}
    {!! Form::text('methodType', null, ['class' => 'form-control ']) !!}

    {!! Form::label('urlWebService',  trans('paramPacs.urlWebService')) !!}
    {!! Form::text('urlWebService', null, ['class' => 'form-control ']) !!}

    {!! Form::label('nameSpace',  trans('paramPacs.nameSpace')) !!}
    {!! Form::text('nameSpace', null, ['class' => 'form-control ']) !!}

    {!! Form::label('userPac',  trans('paramPacs.userPac')) !!}
    {!! Form::text('userPac', null, ['class' => 'form-control ']) !!}

    {!! Form::label('passwordPac', trans('paramPacs.passwordPac')) !!}
    {!! Form::text('passwordPac', null, ['class' => 'form-control ']) !!}

    {!! Form::label('certificateLink',  trans('paramPacs.certificateLink')) !!}
    {!! Form::text('certificateLink', null, ['class' => 'form-control ']) !!}

    {!! Form::label('active',  trans('paramPacs.activate')) !!}
    {!! Form::text('active', null, ['class' => 'form-control ']) !!}

</div>



