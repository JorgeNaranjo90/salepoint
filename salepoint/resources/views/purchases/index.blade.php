@extends('generalPartials.general_view')
@include('purchases.verticalnav')


@section('title')
    Purchase Orders
@endsection

@section('buttons')
@endsection

@section('filters')
    @include('purchases.partials.filters')
@endsection

@section('body_page')
    @include('purchases.partials.table')
    {!! $purchaseOrders->appends(Request::only(['name']))->render() !!}
@endsection