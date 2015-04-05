@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('city.create')}}  {{trans('city.city')}}
@endsection

@section('buttons')
    {!! Form::open(['route'=>'settings.city.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
        {{trans('city.save')}}
    </button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.city.index')}}">Cancel</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('settings.citys.partials.fields')
    {!! Form::close() !!}
@endsection


