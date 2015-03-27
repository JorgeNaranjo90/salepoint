@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Create Partner
@endsection

@section('buttons')
    {!! Form::open(['route'=>'partners.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"  onclick="return confirm('Are you sure created  this partner?')"><i class="fa fa-floppy-o"></i> Save</button>
    <a class="btn btn-danger btn-sm" href="{{route('partners.index')}}">Cancell</a>
@endsection

@section('filters')
@endsection

@section('body_page')

@include('partners.partials.fields')
{!! Form::close() !!}
@endsection
