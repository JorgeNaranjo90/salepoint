@extends('generalPartials.reporttemplate')
@section('title')
    {{$title}}
@endsection
    <a class="btn btn-info" href="{{$route}}"><i class="fa fa-backward"></i>{{trans('botones.back')}}</a>
@section('content')
    <table class="table_column_border table_alter_color_row table_title_bg_color" width="100%">
        <tr>
            <th>{{trans('products.name')}}</th>
            <th>{{trans('products.ean_13')}}</th>
            <th>{{trans('products.uom')}}</th>
            <th>{{trans('products.qty_available')}}</th>
            <th>{{trans('products.incoming_qty')}}e</th>
            <th>{{trans('products.virtual_available')}}</th>
            <th>{{trans('products.purchase_price')}}</th>
            <th>{{trans('products.supplier_name')}}</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->ean13 }}</td>
                <td><center>{{ $product->uom }}</center></td>
                <td><center>{{ $product->qtyAvailable }}</center></td>
                <td><center>{{ $product->incomingQty }}</center></td>
                <td><center>{{ $product->virtualAvailable }}</center></td>
                <td><center>{{ $product->purchasePrice }}</center></td>
                <td>{{ $product->supplier_name}}</td>
            </tr>
        @endforeach
    </table>
@endsection
