<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('name',trans('partners.name')) !!}
        {!! Form::text('name',null,['class' => 'form-control requiered_field','placeholder' => trans('partners.partner_name') ]) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('lastName', trans('partners.last_name')) !!}
        {!! Form::text('lastName',null,['class' => 'form-control','placeholder' => trans('partners.partner_last_name')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">

        {!! Form::label('street', trans('partners.street')) !!}
        {!! Form::text('street',null,['class' => 'form-control','placeholder' => trans('partners.street')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('noExt', trans('partners.exterior_number')) !!}
        {!! Form::number('noExt',null,['class' => 'form-control','placeholder' => trans('partners.exterior_number')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('noInt', trans('partners.interior_number')) !!}
        {!! Form::number('noInt',null,['class' => 'form-control','placeholder' => trans('partners.interior_number')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-5">
        {!! Form::label('colony', trans('partners.colony')) !!}
        {!! Form::text('colony',null,['class' => 'form-control','placeholder' => trans('partners.colony')]) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('zip', trans('partners.zip')) !!}
        {!! Form::number('zip',null,['class' => 'form-control','placeholder' => trans('partners.zip')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('locality', trans('partners.locality')) !!}
        {!! Form::text('locality',null,['class' => 'form-control','placeholder' => trans('partners.locality')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('name',trans('partners.country_name')) !!}
        {!! Form::select('country_id',$countrys,null,['class' => 'form-control requiered_field']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('name', trans('partners.state_name')) !!}
        {!! Form::select('state_id',$states,null,['class' => 'form-control requiered_field']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('name', trans('partners.city_name')) !!}
        {!! Form::select('city_id',$citys,null,['class' => 'form-control requiered_field']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('birthdate', trans('partners.birthdate')) !!}
        {!! Form::date('birthdate',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('rfc',trans('partners.rfc')) !!}
        {!! Form::text('rfc',null,['class' => 'form-control','placeholder' => 'RFC']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('phone',trans('partners.home_phone')) !!}
        {!! Form::text('phone',null,['class' => 'form-control','placeholder' => trans('partners.home_phone')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('mobile',trans('partners.cell_phone')) !!}
        {!! Form::text('mobile',null,['class' => 'form-control','placeholder' => trans('partners.cell_phone')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('fax',trans('partners.fax')) !!}
        {!! Form::text('fax',null,['class' => 'form-control','placeholder' => trans('partners.fax')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('email',trans('partners.email')) !!}
        {!! Form::email('email',null,['class' => 'form-control','placeholder' => trans('partners.email')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('customer',trans('partners.customer')) !!}
        {!! Form::checkbox('customer') !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('supplier', trans('partners.supplier')) !!}
        {!! Form::checkbox('supplier') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('image', trans('partners.image')) !!}
    {!! Form::file('image') !!}
</div>