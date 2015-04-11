@include('sales.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('Detail SaleOrder Profile')}}
@endsection

@section('buttons')
    @section('button_delete')
        @include('sales.partials.cancel')
    @endsection

@endsection

@section('filters')
@endsection

@section('body_page')
    @include('sales.partials.table_detail')
    {!! Form::close() !!}
@endsection