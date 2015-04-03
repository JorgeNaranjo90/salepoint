{!! Form::open(['route'=>'settings.company.store','method'=>'POST','files'=>true]) !!}
<div class="form-group">
    {!! Form::label('name', trans('company.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control  requiered_field']) !!}
</div>
<div class="form-group">

    {!! Form::label('partner', trans('company.partner')) !!}
    {!! Form::select('partner_id',$partners, null, ['class' => 'form-control  requiered_field']) !!}
</div>
<div class="form-group">
    {!! Form::label('currency', trans('company.currency')) !!}
    {!! Form::select('currency_id',$currency, null, ['class' => 'form-control  requiered_field']) !!}
</div>
<div class="form-group">
    {!! Form::label('fiscal regimen', trans('company.fiscal_Regimen')) !!}
    {!! Form::select('fiscalRegimen_id',$fiscal, null, ['class' => 'form-control  requiered_field']) !!}

</div>
<div class="form-group">
    {!! Form::label('name', trans('company.image')) !!}
    {!! Form::file('image') !!}
</div>
{!! Form::close() !!}



