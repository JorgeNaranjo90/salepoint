<!-- Esta linea hay que cambiarla por la de su respectivo menu-->
@include('settings.verticalnav')

<!-- Esta linea va de cajon -->
@extends('generalPartials.general_view')


@section('title')
    Users
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('settings.users.create')}}"><i class="fa fa-user-plus"></i> Create</a>
@endsection

@section('filters')
    @include('settings.users.partials.filters')
@endsection


@section('body_page')
    @include('settings.users.partials.table_index')
    {!! $users->appends(Request::only(['name']))->render() !!}
@endsection