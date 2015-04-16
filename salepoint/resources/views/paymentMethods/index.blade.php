@include('settings.verticalnav')

@extends('generalPartials.general_view')


@section('title')
    {!!Form::label(trans('paymentMethods.typePayment'))   !!}
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('paymentMethods.create')}}"><i class="fa fa-user-plus"></i>
        {{trans('general.create')}}
    </a>
@endsection

@section('filters')
    @include('paymentMethods.partials.filters')
@endsection


@section('body_page')
    @include('paymentMethods.partials.table')
    {!! $payment->appends(Request::only(['name']))->render() !!}
@endsection