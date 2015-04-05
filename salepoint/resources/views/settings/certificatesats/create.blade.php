@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('certificate_sats.create_certificate')}}
@endsection

@section('buttons')
    {!! Form::open(['route'=>'settings.certificatesats.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i> Save</button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.certificatesats.index')}}">Cancell</a>
@endsection

@section('filters')
@endsection

@section('body_page')

@include('settings.certificatesats.partials.fields')
{!! Form::close() !!}
@endsection
