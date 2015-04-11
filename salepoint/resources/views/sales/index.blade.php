<!-- Esta linea hay que cambiarla por la de su respectivo menu-->
@include('sales.verticalnav')

<!-- Esta linea va de cajon -->
@extends('generalPartials.general_view')


@section('title')
    {{trans('Sale Orders')}}
@endsection

@section('filters')
    @include('sales.partials.filters')
@endsection

@section('body_page')
    @include('sales.partials.table_index')
    {!! $sale_orders->appends(Request::only(['name']))->render() !!}
@endsection