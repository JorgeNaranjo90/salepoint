<div class="col-md-10 col-md-offset-1">
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control  requiered_field']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchasePrice', 'PurchasePrice') !!}
        {!! Form::text('purchasePrice', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('salePrice', 'SalePrice') !!}
        {!! Form::text('salePrice', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Uom') !!}
        {!! Form::select('uom_id',$uom, null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('qtyAvailable', 'QtyAvailable') !!}
        {!! Form::text('qtyAvailable', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('incomingQty', 'IncomingQty') !!}
        {!! Form::text('incomingQty', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('virtualAvailable', 'VirtualAvailable') !!}
        {!! Form::text('virtualAvailable', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ean13', 'Ean13') !!}
        {!! Form::text('ean13', null, ['class' => 'form-control  requiered_field']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Image') !!}
        {!! Form::file('image', ['class' => 'form-control']) !!}
    </div>
</div>