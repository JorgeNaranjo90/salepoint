@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {!!Form::label(trans('paramPacs.create'))   !!} ParamPacs
@endsection

@section('buttons')
    {!! Form::open(['route'=>'paramPacs.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
        {!!Form::label(trans('paramPacs.save'))   !!}
    </button>
    <a class="btn btn-danger btn-sm" href="{{route('paramPacs.index')}}">
        {!!Form::label(trans('paramPacs.cancel'))   !!}
    </a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('paramPacs.partials.fields')
    {!! Form::close() !!}
@endsection





