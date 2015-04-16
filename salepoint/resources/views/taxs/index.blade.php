@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    <b>Taxs</b>
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('taxs.create')}}"><i class="fa fa-user-plus"></i> {{trans('general.create')}}</a>
@endsection
@section('filters')
    @include('taxs.partials.filters')
@endsection

@section('body_page')
    @include('taxs.partials.table')
    {!! $taxs->appends(Request::only(['name']))->render() !!}
@endsection