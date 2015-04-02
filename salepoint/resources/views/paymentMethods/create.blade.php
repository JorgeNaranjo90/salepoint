@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Create PaymentMethods
@endsection

@section('buttons')
    {!! Form::open(['route'=>'paymentMethods.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i> Save</button>
    <a class="btn btn-danger btn-sm" href="{{route('paymentMethods.index')}}">Cancel</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('paymentMethods.partials.fields')
    {!! Form::close() !!}
@endsection





