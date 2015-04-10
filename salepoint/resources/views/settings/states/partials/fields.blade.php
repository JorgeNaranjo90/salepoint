<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('name', trans('state.name')) !!}
        {!! Form::text('name', null, ['class' => 'form-control  requiered_field', 'placeholder' => trans('state.state_name') ]) !!}
    </div>

    <div class="form-group col-lg-6">
        {!! Form::label('code', trans('state.code')) !!}
        {!! Form::text('code', null, ['class' => 'form-control  requiered_field' ,'placeholder' => trans('state.state_code')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('abbreviation',trans('state.abbreviation')) !!}
        {!! Form::text('abbreviation', null, ['class' => 'form-control ', 'placeholder' => trans('state.state_abbreviation')]) !!}
    </div>

    <div class="form-group col-lg-6">
        {!! Form::label('country_id',trans('state.country')) !!}
        {!! Form::select('country_id',$country, null, ['class' => 'form-control  requiered_field','placeholder' => trans('state.country_id')]) !!}
    </div>
</div>


