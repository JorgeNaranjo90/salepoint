<div class="form-group">
    {!! Form::label('name',   trans('city.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control  requiered_field']) !!}
</div>

<div class="form-group">
    {!! Form::label('code',   trans('city.code')) !!}
    {!! Form::text('code', null, ['class' => 'form-control  requiered_field']) !!}
</div>

<div class="form-group">
    {!! Form::label('abbreviation',   trans('city.abbreviation')) !!}
    {!! Form::text('abbreviation', null, ['class' => 'form-control ']) !!}
</div>

<div class="form-group">
    {!! Form::label('state_id',   trans('city.state_id')) !!}
    {!! Form::select('state_id',$state, null, ['class' => 'form-control  requiered_field']) !!}

</div>