{!! Form::open(['route'=>'settings.company.store','method'=>'POST','files'=>true]) !!}
<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">

    {!! Form::label('name', 'Partner') !!}
    {!! Form::select('partner_id',$partners, null, ['class' => 'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('name', 'Currency') !!}
    {!! Form::select('currency_id',$currency, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'FiscalRegimen') !!}
    {!! Form::select('fiscalRegimen_id',$fiscal, null, ['class' => 'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('name', 'Image') !!}
    {!! Form::file('image') !!}
</div>
<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
{!! Form::close() !!}



