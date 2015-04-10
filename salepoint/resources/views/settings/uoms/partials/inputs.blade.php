<div class="col-md-10 col-md-offset-1">
    <div class="form-group">
        {!! Form::label('name', trans('uoms.name')) !!}
        {!! Form::text('name', null, ['class' => 'form-control  requiered_field']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', trans('uoms.description')) !!}
        {!! Form::textArea('description', null, ['class' => 'form-control']) !!}
    </div>
</div>
