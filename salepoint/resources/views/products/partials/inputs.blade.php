<div class="col-md-10 col-md-offset-1">
    <div class="form-group">
        {!! Form::label('name', trans('products.name')) !!}
        {!! Form::text('name', null, ['class' => 'form-control  requiered_field','placeholder'=>trans('products.product_name')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', trans('products.description')) !!}
        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder'=> trans('products.product_description')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchasePrice', trans('products.purchase_price')) !!}
        {!! Form::text('purchasePrice', null, ['class' => 'form-control','placeholder' => trans('products.purchase_price')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('salePrice', trans('products.sale_price')) !!}
        {!! Form::text('salePrice', null, ['class' => 'form-control','placeholder' => trans('products.sale_price')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', trans('products.uom')) !!}
        {!! Form::select('uom_id',$uom, null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('qtyAvailable', trans('products.qty_available')) !!}
        {!! Form::text('qtyAvailable', null, ['class' => 'form-control','placeholder'=> trans('products.qty_available')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('incomingQty', trans('products.incoming_qty')) !!}
        {!! Form::text('incomingQty', null, ['class' => 'form-control','placeholder' => trans('products.incoming_qty')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Virtual available', trans('products.virtual_available')) !!}
        {!! Form::text('virtualAvailable', null, ['class' => 'form-control','placeholder'=> trans('products.product_virtual_available')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ean13',trans('products.ean_13')) !!}
        {!! Form::text('ean13', null, ['class' => 'form-control  requiered_field','placeholder' => trans('products.ean_13')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', trans('products.image')) !!}
        {!! Form::file('image', ['class' => 'form-control','placeholder' => trans('products.image')]) !!}
    </div>
</div>