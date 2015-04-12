@extends('generalPartials.general_view')
@include('purchases.verticalnav')

@section('title')
    Purchase products
@endsection

@section('buttons')
@endsection

@section('filters')
@endsection

@section('body_page')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    @include('purchases.partials.scripts')
    @include('purchases.partials.purchase_main')
@endsection


