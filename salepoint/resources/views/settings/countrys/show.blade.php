@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('country.country')}}
@endsection

@section('buttons')
@section('button_delete')
    @include('settings.countrys.partials.delete')
@endsection
<a class="btn btn-info btn-sm" href="{{ route('settings.country.edit', $country->id) }}"><i class="fa fa-pencil"></i>
    {{trans('country.edit')}}
</a>
<a class="btn btn-success btn-sm" href="{{ route('settings.country.create') }}"><i class="fa fa-user-plus"></i>
    {{trans('country.create')}}
</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    <div class="col-lg-2">
    </div>
    <div class="col-lg-9">
        {{trans('country.name')}}:<h1>{{ $country->name }}</h1>
    </div>
@endsection