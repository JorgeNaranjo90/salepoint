<div class="row">
    <div class="form-group col-lg-7">
        {!! Form::label('ean13',trans('products.ean_13')) !!}
        {!! Form::number('ean13', null, ['class' => 'form-control  requiered_field','placeholder' => trans('products.ean_13')]) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-lg-5">
        {!! Form::label('name', trans('products.name')) !!}
        {!! Form::text('name', null, ['class' => 'form-control  requiered_field','placeholder'=>trans('products.product_name')]) !!}
    </div>
    <div class="form-group col-lg-7">
        {!! Form::label('description', trans('products.description')) !!}
        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder'=> trans('products.product_description')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('purchasePrice', trans('products.purchase_price')) !!}
        {!! Form::text('purchasePrice', null, ['class' => 'form-control','placeholder' => trans('products.purchase_price')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('salePrice', trans('products.sale_price')) !!}
        {!! Form::text('salePrice', null, ['class' => 'form-control','placeholder' => trans('products.sale_price')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('name', trans('products.uom')) !!}
        {!! Form::select('uom_id',$uom, null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('qtyAvailable', trans('products.qty_available')) !!}
        {!! Form::text('qtyAvailable', null, ['class' => 'form-control','placeholder'=> trans('products.qty_available')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('incomingQty', trans('products.incoming_qty')) !!}
        {!! Form::text('incomingQty', null, ['class' => 'form-control','placeholder' => trans('products.incoming_qty')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('Virtual available', trans('products.virtual_available')) !!}
        {!! Form::text('virtualAvailable', null, ['class' => 'form-control','placeholder'=> trans('products.product_virtual_available')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('image', trans('products.image')) !!}
        {!! Form::file('image', ['class' => 'form-control','placeholder' => trans('products.image')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('name',trans('products.supplier_name')) !!}
        {!! Form::select('partner_id',$supplier,null,['class' => 'form-control requiered_field']) !!}
    </div>
</div>


