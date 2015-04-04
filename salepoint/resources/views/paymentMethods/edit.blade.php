@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {!!Form::label(trans('paymentMethods.edit'))   !!} {!!Form::label(trans('paymentMethods.typePayment'))   !!}: <b>{{ $payment->typePayment }}</b>
@endsection
@section('buttons')

@section('button_delete')
    @include('paymentMethods.partials.delete')
@endsection
{!! Form::model($payment, ['route'=>['paymentMethods.update',$payment->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o">{{ trans('paymentMethods.save') }}</i></button>
<a class="btn btn-danger btn-sm" href="{{route('paymentMethods.index')}}"><i class="fa fa-times">{{ trans('paymentMethods.cancel') }}</i></a>
<a class="btn btn-success btn-sm" href="{{route('paymentMethods.create')}}"><i class="fa fa-user-plus">{{ trans('paymentMethods.create') }}</i></a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('paymentMethods.partials.fields')
    {!! Form::close() !!}
@endsection

