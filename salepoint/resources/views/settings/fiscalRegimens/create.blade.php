@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('fiscalRegimen.create')}}   {{trans('fiscalRegimen.fiscalRegimen')}}
@endsection

@section('buttons')
    {!! Form::open(['route'=>'settings.fiscalRegimen.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
        {{trans('general.save')}}
    </button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.fiscalRegimen.index')}}">
        {{trans('general.cancel')}}
    </a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('settings.fiscalRegimens.partials.fields')
    {!! Form::close() !!}
@endsection


