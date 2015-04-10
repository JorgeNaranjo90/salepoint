@include('settings.verticalnav')

@extends('generalPartials.general_view')


@section('title')
    ParamPacs
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('paramPacs.create')}}"><i class="fa fa-user-plus"></i>
        {{trans('botones.create') }}
    </a>
@endsection

@section('filters')
    @include('paramPacs.partials.filters')
@endsection

@section('body_page')
    @include('paramPacs.partials.table')
    {!! $param->appends(Request::only(['type']))->render() !!}
@endsection