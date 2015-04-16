<!-- Esta linea hay que cambiarla por la de su respectivo menu-->
@include('settings.verticalnav')

<!-- Esta linea va de cajon -->
@extends('generalPartials.general_view')


@section('title')
    Uoms
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('settings.uoms.create')}}"><i class="fa fa-user-plus"></i>  {{trans('general.create')}}</a>
@endsection

@section('filters')
    @include('settings.uoms.partials.filters')
@endsection


@section('body_page')
    @include('settings.uoms.partials.table_index')
    {!! $uoms->appends(Request::only(['name']))->render() !!}
@endsection