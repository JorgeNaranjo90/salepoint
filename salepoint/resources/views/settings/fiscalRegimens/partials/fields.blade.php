<div class="form-group">
    {!! Form::label('name', trans('fiscalRegimen.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control  requiered_field','placeholder' => trans('fiscalRegimen.name') ]) !!}

    {!! Form::label('description',trans('fiscalRegimen.description'))!!}
    {!! Form::textarea('description',null,['class'=>'form-control'])  !!}

</div>
