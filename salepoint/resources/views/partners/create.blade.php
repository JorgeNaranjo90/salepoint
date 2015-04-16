@include('partners.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('partners.create_partner')}}
@endsection

@section('buttons')
    {!! Form::open(['route'=>'partners.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>{{trans('general.save')}}</button>
    <a class="btn btn-danger btn-sm" href="{{route('partners.index')}}">{{trans('general.cancel')}}l</a>
@endsection

@section('filters')
@endsection

@section('body_page')

@include('partners.partials.fields')
{!! Form::close() !!}
@endsection
