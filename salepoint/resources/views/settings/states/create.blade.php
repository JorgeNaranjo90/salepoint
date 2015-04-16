@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('state.create')}}  {{trans('state.state')}}
@endsection

@section('buttons')
    {!! Form::open(['route'=>'settings.state.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
        {{trans('general.save')}}
    </button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.state.index')}}">Cancel</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('settings.states.partials.fields')
    {!! Form::close() !!}
@endsection


