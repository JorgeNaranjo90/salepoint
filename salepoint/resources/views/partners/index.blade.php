@include('partners.verticalnav')
@extends('generalPartials.general_view')

@section('title')
   {{ trans('partners.partners') }}
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('partners.create')}}"><i class="fa fa-user-plus"></i>Create</a>
@endsection

@section('head')
    {{trans('general.there_are').' '.$total_partners.' '.trans('partners.partners')}}
@endsection

@section('filters')
    @include('partners.partials.filters')
@endsection

@section('body_page')
    @include('partners.partials.table')
    {!! $partners->appends(Request::only(['name']))->render() !!}
@endsection