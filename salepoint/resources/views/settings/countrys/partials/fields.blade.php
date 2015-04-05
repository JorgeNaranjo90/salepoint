<div class="form-group">
    {!! Form::label('name',trans('country.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control  requiered_field']) !!}
</div>

<div class="form-group">
    {!! Form::label('code',trans('country.code')) !!}
    {!! Form::text('code', null, ['class' => 'form-control  requiered_field']) !!}
</div>

<div class="form-group">
    {!! Form::label('abbreviation', trans('country.abbreviation')) !!}
    {!! Form::text('abbreviation', null, ['class' => 'form-control ']) !!}
</div>
