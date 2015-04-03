
@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Create Currency
@endsection

@section('buttons')

    {!! Form::open(['route'=>'settings.currency.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
        {!!Form::label(trans('currency.Create')) !!}
    </button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.currency.index')}}">
        {!!Form::label(trans('currency.Cancel')) !!}
    </a>
@endsection

@section('filters')
@endsection

@section('body_page')

@include('settings.currencys.partials.fields')
{!! Form::close() !!}
@endsection
