<!-- Esta linea hay que cambiarla por la de su respectivo menu-->
@include('settings.verticalnav')

<!-- Esta linea va de cajon -->
@extends('generalPartials.general_view')
@section('title')
    {{trans('company.company')}}
@endsection
@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('settings.company.create')}}"><i class="fa fa-user-plus"></i>
        {{trans('general.create')}}
    </a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('settings.companys.partials.table')
    {!! $company->appends(Request::only(['company']))->render() !!}
@endsection