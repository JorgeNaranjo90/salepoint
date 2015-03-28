@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Create Company
@endsection

@section('buttons')
    {!! Form::open(['route'=>'settings.company.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i> Save</button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.fiscalRegimen.index')}}">Cancel</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('settings.companys.partials.field')
    {!! Form::close() !!}
@endsection

