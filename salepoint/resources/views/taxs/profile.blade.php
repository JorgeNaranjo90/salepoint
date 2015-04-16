@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Profile Tax
@endsection

@section('buttons')
@section('button_delete')
    @include('taxs.partials.delete')
@endsection


<a class="btn btn-info btn-sm" href="{{ route('taxs.edit', $tax->id) }}"><i class="fa fa-pencil"></i> {{trans('general.edit')}}</a>
<a class="btn btn-success btn-sm" href="{{ route('taxs.create') }}"><i class="fa fa-user-plus"></i> {{trans('general.create')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    <div class="col-lg-1">
        {{trans('tax.name')}}
    </div>
    <div class="col-lg-3">
        <h2>{{ $tax->name }}</h2>
    </div>
    <div class="col-lg-1">
        {{trans('tax.code')}}
    </div>
    <div class="col-lg-3">
        <h2>{{ $tax->code}}</h2>
    </div>
    <div class="col-lg-1">
        {{trans('tax.value')}}
    </div>
    <div class="col-lg-3">
        <h2>{{ $tax->value }}</h2>
    </div>
@endsection