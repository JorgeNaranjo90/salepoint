{!! Form::open(['route'=>'settings.company.store','method'=>'POST','files'=>true]) !!}
<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control  requiered_field']) !!}
</div>
<div class="form-group">

    {!! Form::label('name', 'Partner') !!}
    {!! Form::select('partner_id',$partners, null, ['class' => 'form-control  requiered_field']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Currency') !!}
    {!! Form::select('currency_id',$currency, null, ['class' => 'form-control  requiered_field']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'FiscalRegimen') !!}
    {!! Form::select('fiscalRegimen_id',$fiscal, null, ['class' => 'form-control  requiered_field']) !!}

</div>
<div class="form-group">
    {!! Form::label('name', 'Image') !!}
    {!! Form::file('image') !!}
</div>
{!! Form::close() !!}



