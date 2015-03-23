{!! Form::open(['route'=>'settings.company.store','method'=>'POST','files'=>true]) !!}
<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">

    {!! Form::label('name', 'Partner') !!}
    {!! Form::select('type',[''=> 'Seleccione un Partner','fiscalRegimen'=>'Partner'], null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Currency') !!}
    {!! Form::select('currency_id',$currency, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'FiscalRegimen') !!}
    {!! Form::select('type',[''=> 'Seleccione un FiscalRegimen','fiscalRegimen'=>'Fiscal Regimen'], null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Image') !!}
    {!! Form::file('image') !!}
</div>
<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
{!! Form::close() !!}



