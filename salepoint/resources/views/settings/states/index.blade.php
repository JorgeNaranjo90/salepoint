<!-- Esta linea hay que cambiarla por la de su respectivo menu-->
@include('settings.verticalnav')

<!-- Esta linea va de cajon -->
@extends('generalPartials.general_view')


@section('title')
    {{trans('state.state')}}
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('settings.state.create')}}"><i class="fa fa-user-plus"></i>
        {{trans('botones.create')}}
    </a>
@endsection

@section('filters')
    @include('settings.states.partials.filters')
@endsection


@section('body_page')
    @include('settings.states.partials.table')
    {!! $state->appends(Request::only(['state']))->render() !!}
@endsection






