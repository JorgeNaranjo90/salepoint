<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('name',   trans('city.name')) !!}
        {!! Form::text('name', null, ['class' => 'form-control  requiered_field','placeholder' => trans('city.city_name')]) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('code',   trans('city.code')) !!}
        {!! Form::text('code', null, ['class' => 'form-control  requiered_field','placeholder' => trans('city.city_code')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('abbreviation',   trans('city.abbreviation')) !!}
        {!! Form::text('abbreviation', null, ['class' => 'form-control','placeholder' => trans('city.city_abbreviation')]) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('state_id',   trans('city.state_id')) !!}
        {!! Form::select('state_id',$state, null, ['class' => 'form-control  requiered_field']) !!}

    </div>
</div>

