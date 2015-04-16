@extends('generalPartials.general_view')
@include('purchases.verticalnav')


@section('title')
    Purchase Orders
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('purchases.create')}}"><i class="fa fa-user-plus"></i> {{trans('general.create')}}</a>
@endsection

@section('filters')
    @include('purchases.partials.filters')
@endsection

@section('body_page')
    @include('purchases.partials.table')
    {!! $purchaseOrders->appends(Request::only(['name']))->render() !!}
@endsection