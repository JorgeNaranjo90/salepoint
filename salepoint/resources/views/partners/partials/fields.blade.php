<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('name',trans('partners.Name')) !!}
        {!! Form::text('name',null,['class' => 'form-control requiered_field','placeholder' => trans('partners.Partner name') ]) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('lastName', trans('partners.lastName')) !!}
        {!! Form::text('lastName',null,['class' => 'form-control','placeholder' => trans('partners.Partner last name')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">

        {!! Form::label('street', trans('partners.street')) !!}
        {!! Form::text('street',null,['class' => 'form-control','placeholder' => trans('partners.Street')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('noExt', trans('partners.Exterior Number')) !!}
        {!! Form::number('noExt',null,['class' => 'form-control','placeholder' => trans('partners.Exterior number')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('noInt', trans('partners.Interior Number')) !!}
        {!! Form::number('noInt',null,['class' => 'form-control','placeholder' => trans('partners.Interior number')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-5">
        {!! Form::label('colony', trans('partners.Colony')) !!}
        {!! Form::text('colony',null,['class' => 'form-control','placeholder' => trans('partners.Colony')]) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('zip', trans('partners.Zip')) !!}
        {!! Form::number('zip',null,['class' => 'form-control','placeholder' => trans('partners.Zip')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('locality', trans('partners.Locality')) !!}
        {!! Form::text('locality',null,['class' => 'form-control','placeholder' => trans('partners.Locality')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('name',trans('partners.Country Name')) !!}
        {!! Form::select('country_id',$countrys,null,['class' => 'form-control requiered_field']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('name', trans('partners.State Name')) !!}
        {!! Form::select('state_id',$states,null,['class' => 'form-control requiered_field']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('name', trans('partners.City Name')) !!}
        {!! Form::select('city_id',$citys,null,['class' => 'form-control requiered_field']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('birthdate', trans('partners.Birthdate')) !!}
        {!! Form::date('birthdate',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('rfc',trans('partners.RFC')) !!}
        {!! Form::text('rfc',null,['class' => 'form-control','placeholder' => 'RFC']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('phone',trans('partners.Home Phone')) !!}
        {!! Form::text('phone',null,['class' => 'form-control','placeholder' => trans('partners.Home Phone')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('mobile',trans('partners.Cell Phone')) !!}
        {!! Form::text('mobile',null,['class' => 'form-control','placeholder' => trans('partners.Cell Phone')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('fax',trans('partners.Fax')) !!}
        {!! Form::text('fax',null,['class' => 'form-control','placeholder' => 'Fax']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('email',trans('partners.Email')) !!}
        {!! Form::text('email',null,['class' => 'form-control','placeholder' => trans('partners.Email')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('customer',trans('partners.Customer')) !!}
        {!! Form::checkbox('customer',1,true) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('supplier', trans('partners.Supplier')) !!}
        {!! Form::checkbox('supplier',1,false) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('image', trans('partners.Image 50 x 50px')) !!}
    {!! Form::file('image') !!}
</div>