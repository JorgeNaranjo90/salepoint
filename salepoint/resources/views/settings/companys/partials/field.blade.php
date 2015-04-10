{!! Form::open(['route'=>'settings.company.store','method'=>'POST','files'=>true]) !!}
<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('name', trans('company.name')) !!}
        {!! Form::text('name', null, ['class' => 'form-control  requiered_field','placeholder' => trans('company.name')]) !!}
    </div>
    <div class="form-group col-lg-6">

        {!! Form::label('partner', trans('company.partner')) !!}
        {!! Form::select('partner_id',$partners, null, ['class' => 'form-control  requiered_field']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('currency', trans('company.currency')) !!}
        {!! Form::select('currency_id',$currency, null, ['class' => 'form-control  requiered_field']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('fiscal regimen', trans('company.fiscal_Regimen')) !!}
        {!! Form::select('fiscalRegimen_id',$fiscal, null, ['class' => 'form-control  requiered_field']) !!}

    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('name', trans('company.image')) !!}
        {!! Form::file('image') !!}
    </div>
</div>
{!! Form::close() !!}



