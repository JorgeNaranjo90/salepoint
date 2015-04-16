@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('country.create')}} {{trans('country.country')}}
@endsection

@section('buttons')
    {!! Form::open(['route'=>'settings.country.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
        {{trans('general.save')}}
    </button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.country.index')}}">{{trans('general.cancel')}}</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('settings.countrys.partials.fields')
    {!! Form::close() !!}
@endsection

