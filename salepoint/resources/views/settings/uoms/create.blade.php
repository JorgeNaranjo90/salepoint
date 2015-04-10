@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Create Uom
@endsection

@section('buttons')
    {!! Form::open(['route'=>'settings.uoms.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>  {{trans('botones.save')}}</button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.uoms.index')}}"> {{trans('botones.cancel')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('settings.uoms.partials.inputs')
    {!! Form::close() !!}
@endsection
