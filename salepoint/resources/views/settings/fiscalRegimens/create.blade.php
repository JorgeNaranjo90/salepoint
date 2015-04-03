@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {!!Form::label(trans('fiscalRegimen.Create')) !!}   {!!Form::label(trans('fiscalRegimen.FiscalRegimen')) !!}
@endsection

@section('buttons')
    {!! Form::open(['route'=>'settings.fiscalRegimen.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
        {!!Form::label(trans('fiscalRegimen.Save')) !!}
    </button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.fiscalRegimen.index')}}">
        {!!Form::label(trans('fiscalRegimen.Cancel')) !!}
    </a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('settings.fiscalRegimens.partials.fields')
    {!! Form::close() !!}
@endsection


