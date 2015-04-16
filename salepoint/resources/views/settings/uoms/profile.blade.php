@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Profile Uom
@endsection

@section('buttons')
    @section('button_delete')
        @include('settings.uoms.partials.delete')
    @endsection
    <a class="btn btn-info btn-sm" href="{{ route('settings.uoms.edit', $uom->id) }}"><i class="fa fa-pencil"></i>  {{trans('general.edit')}}</a>
    <a class="btn btn-success btn-sm" href="{{ route('settings.uoms.create') }}"><i class="fa fa-user-plus"></i>  {{trans('general.create')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    <div class="col-lg-9">
        <h1>{{ $uom->name }}</h1>
        <h4>{{ $uom->description }}</h4>
    </div>
@endsection