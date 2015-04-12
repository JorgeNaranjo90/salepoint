@include('purchases.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Purchase order
@endsection

@section('buttons')
    @section('button_delete')
        @include('purchases.partials.cancel')
    @endsection
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('purchases.partials.table_detail')
    {!! Form::close() !!}
@endsection