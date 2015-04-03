@include('settings.verticalnav')

@extends('generalPartials.general_view')


@section('title')
    PaymentMethods
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('paymentMethods.create')}}"><i class="fa fa-user-plus"></i> Create</a>
@endsection

@section('filters')
    @include('paymentMethods.partials.filters')
@endsection


@section('body_page')
    @include('paymentMethods.partials.table')
    {!! $payment->appends(Request::only(['type']))->render() !!}
@endsection