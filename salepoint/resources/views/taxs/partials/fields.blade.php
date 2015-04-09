<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('name', trans('tax.name')) !!}
        {!! Form::text('name',null,['class' => 'form-control requiered_field','placeholder' => 'Tax Name' ]) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('code', trans('tax.code')) !!}
        {!! Form::text('code',null,['class' => 'form-control','placeholder' => 'Tax Code']) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('value', trans('tax.value')) !!}
        {!! Form::number('value',null,['class' => 'form-control requiered_field','placeholder' => 'Tax Value']) !!}
    </div>
</div>
{{trans('tax.cancel')}}
