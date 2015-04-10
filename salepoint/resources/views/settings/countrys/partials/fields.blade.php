<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('name',trans('country.name')) !!}
        {!! Form::text('name', null, ['class' => 'form-control  requiered_field','placeholder' => trans('country.country_name')]) !!}
    </div>

    <div class="form-group col-lg-6">
        {!! Form::label('code',trans('country.code')) !!}
        {!! Form::text('code', null, ['class' => 'form-control  requiered_field','placeholder' => trans('country.country_code')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('abbreviation', trans('country.abbreviation')) !!}
        {!! Form::text('abbreviation', null, ['class' => 'form-control ','placeholder' => trans('country.country_abbreviation')]) !!}
    </div>
</div>


