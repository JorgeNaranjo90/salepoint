<!-- Esta linea hay que cambiarla por la de su respectivo menu-->
@include('settings.verticalnav')

<!-- Esta linea va de cajon -->
@extends('generalPartials.general_view')


@section('title')
    {{trans('fiscalRegimen.fiscalRegimen')}}
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('settings.fiscalRegimen.create')}}"><i class="fa fa-user-plus"></i>
        {{trans('botones.create')}}
    </a>
@endsection
@section('filters')
    @include('settings.fiscalRegimens.partials.filters')
@endsection


@section('body_page')
    @include('settings.fiscalRegimens.partials.table')
    {!! $fiscal->appends(Request::only(['fiscal']))->render() !!}
@endsection






