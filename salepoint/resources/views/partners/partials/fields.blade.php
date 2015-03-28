<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class' => 'form-control requiered_field','placeholder' => 'Partner name' ]) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('lastName', 'Last Name:') !!}
        {!! Form::text('lastName',null,['class' => 'form-control','placeholder' => 'Partner last name']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">

        {!! Form::label('street', 'Street:') !!}
        {!! Form::text('street',null,['class' => 'form-control','placeholder' => 'Street']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('noExt', 'Exterior Number:') !!}
        {!! Form::number('noExt',null,['class' => 'form-control','placeholder' => 'Exterior number']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('noInt', 'Interior Number:') !!}
        {!! Form::number('noInt',null,['class' => 'form-control','placeholder' => 'Interior number']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-5">
        {!! Form::label('colony', 'Colony:') !!}
        {!! Form::text('colony',null,['class' => 'form-control','placeholder' => 'Colony']) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('zip', 'Zip:') !!}
        {!! Form::number('zip',null,['class' => 'form-control','placeholder' => 'Zip']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('locality', 'Locality:') !!}
        {!! Form::text('locality',null,['class' => 'form-control','placeholder' => 'Locality']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('name', 'Country Name:') !!}
        {!! Form::select('country_id',$countrys,null,['class' => 'form-control requiered_field']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('name', 'State Name:') !!}
        {!! Form::select('state_id',$states,null,['class' => 'form-control requiered_field']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('name', 'City Name:') !!}
        {!! Form::select('city_id',$citys,null,['class' => 'form-control requiered_field']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('birthdate', 'Birthdate:') !!}
        {!! Form::date('birthdate',null,['class' => 'form-control','placeholder' => 'Birthdate']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('rfc', 'RFC:') !!}
        {!! Form::text('rfc',null,['class' => 'form-control','placeholder' => 'RFC']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone',null,['class' => 'form-control','placeholder' => 'Home Phone']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('mobile', 'Cell Phone:') !!}
        {!! Form::text('mobile',null,['class' => 'form-control','placeholder' => 'Cell Phone']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('fax', 'Fax:') !!}
        {!! Form::text('fax',null,['class' => 'form-control','placeholder' => 'Fax']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email',null,['class' => 'form-control','placeholder' => 'Email']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('customer', 'Customer:') !!}
        {!! Form::checkbox('customer','checked') !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('supplier', 'Supplier:') !!}
        {!! Form::checkbox('supplier') !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>