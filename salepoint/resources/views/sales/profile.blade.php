@include('sales.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('sales.sale_order_profile')}}
@endsection

@section('buttons')
    @section('button_delete')
        @include('sales.partials.cancel')
    @endsection
    <a class="btn btn-info btn-sm" href="{{ route('sales.edit', $sale_order->id) }}"><i class="fa fa-pencil"></i> {{trans('botones.cancel')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('sales.partials.table_profile')
@endsection