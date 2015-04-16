
@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {!!Form::label(trans('currency.create')) !!} {!!Form::label(trans('currency.currency')) !!}
@endsection

@section('buttons')

    {!! Form::open(['route'=>'settings.currency.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
        {{trans('general.create')}}
    </button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.currency.index')}}">
        {{trans('general.cancel')}}
    </a>
@endsection

@section('filters')
@endsection

@section('body_page')

@include('settings.currencys.partials.fields')
{!! Form::close() !!}
@endsection
