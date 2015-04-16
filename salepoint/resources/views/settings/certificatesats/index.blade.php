@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
   <b>Certificate Sat</b>
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('settings.certificatesats.create')}}"><i class="fa fa-user-plus"></i> {{trans('general.create')}}</a>
@endsection
@section('filters')
    @include('settings.certificatesats.partials.filters')
@endsection

@section('body_page')
    @include('settings.certificatesats.partials.table')
    {!! $certificatesats->appends(Request::only(['name']))->render() !!}
@endsection