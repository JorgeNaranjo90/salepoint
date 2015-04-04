<div class="form-group">
    {!! Form::label('name', trans('state.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control  requiered_field']) !!}
</div>

<div class="form-group">
    {!! Form::label('code', trans('state.code')) !!}
    {!! Form::text('code', null, ['class' => 'form-control  requiered_field']) !!}
</div>

<div class="form-group">
    {!! Form::label('abbreviation',trans('state.abbreviation')) !!}
    {!! Form::text('abbreviation', null, ['class' => 'form-control ']) !!}
</div>

<div class="form-group">
    {!! Form::label('country_id',trans('state.country_id')) !!}
    {!! Form::select('country_id',$country, null, ['class' => 'form-control  requiered_field']) !!}

</div>