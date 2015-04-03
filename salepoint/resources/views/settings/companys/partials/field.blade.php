{!! Form::open(['route'=>'settings.company.store','method'=>'POST','files'=>true]) !!}
<div class="form-group">
    {!! Form::label('name', trans('company.Name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control  requiered_field']) !!}
</div>
<div class="form-group">

    {!! Form::label('partner', trans('company.Partner')) !!}
    {!! Form::select('partner_id',$partners, null, ['class' => 'form-control  requiered_field']) !!}
</div>
<div class="form-group">
    {!! Form::label('currency', trans('company.Currency')) !!}
    {!! Form::select('currency_id',$currency, null, ['class' => 'form-control  requiered_field']) !!}
</div>
<div class="form-group">
    {!! Form::label('fiscal regimen', trans('company.Fiscal Regimen')) !!}
    {!! Form::select('fiscalRegimen_id',$fiscal, null, ['class' => 'form-control  requiered_field']) !!}

</div>
<div class="form-group">
    {!! Form::label('name', trans('company.Image')) !!}
    {!! Form::file('image') !!}
</div>
{!! Form::close() !!}



