@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Create ParamPacs
@endsection

@section('buttons')
    {!! Form::open(['route'=>'paramPacs.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i> Save</button>
    <a class="btn btn-danger btn-sm" href="{{route('paramPacs.index')}}">Cancel</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('paramPacs.partials.fields')
    {!! Form::close() !!}
@endsection





