@include('sales.verticalnav')
@extends('generalPartials.general_view')

@section('title')
     {{ trans('sales.edit_sale_order'), $sale_order->name }}
@endsection

@section('buttons')

    {!! Form::model($sale_order, ['route'=>['sales.update',$sale_order->id],'method'=>'PUT','files'=>true]) !!}
        <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i> {{trans('botones.save')}}</button>
        <a class="btn btn-danger btn-sm" href="{{route('products.index')}}"><i class="fa fa-times"></i>{{trans('botones.cancel')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('sales.partials.table_detail')
    {!! Form::close() !!}
@endsection