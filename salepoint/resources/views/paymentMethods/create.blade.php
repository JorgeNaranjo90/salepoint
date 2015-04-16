@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {!!Form::label(trans('paymentMethods.create'))   !!}  {!!Form::label(trans('paymentMethods.typeMethods'))   !!}
@endsection

@section('buttons')
    {!! Form::open(['route'=>'paymentMethods.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>{{trans('general.save')}}</button>
    <a class="btn btn-danger btn-sm" href="{{route('paymentMethods.index')}}">{{trans('general.cancel')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('paymentMethods.partials.fields')
    {!! Form::close() !!}
@endsection




