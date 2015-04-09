@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('city.city')}}
@endsection

@section('buttons')
@section('button_delete')
    @include('settings.citys.partials.delete')
@endsection
<a class="btn btn-info btn-sm" href="{{ route('settings.city.edit', $city->id) }}"><i class="fa fa-pencil"></i>
    {{trans('city.edit')}}
</a>
<a class="btn btn-success btn-sm" href="{{ route('settings.city.create') }}"><i class="fa fa-user-plus"></i>  {{trans('city.create')}}</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    <div class="col-lg-2">
    </div>
    <div class="col-lg-9">
        {{trans('city.name')}} :<h1>{{ $city->name }}</h1>
    </div>
@endsection