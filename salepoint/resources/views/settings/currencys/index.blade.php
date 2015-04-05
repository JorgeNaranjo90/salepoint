<!-- Esta linea hay que cambiarla por la de su respectivo menu-->
@include('settings.verticalnav')

<!-- Esta linea va de cajon -->
@extends('generalPartials.general_view')

@section('title')
    {!!Form::label(trans('currency.currency')) !!}
@endsection
@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('settings.currency.create')}}"><i class="fa fa-user-plus"></i>
        {!!Form::label(trans('currency.create')) !!}
    </a>
@endsection

@section('filters')
    @include('settings.currencys.partials.filters')
@endsection
@section('body_page')
    @include('settings.currencys.partials.table')
    {!! $currency->appends(Request::only(['currency']))->render() !!}
@endsection

