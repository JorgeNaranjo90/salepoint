@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('users.users')}} {{trans('botones.create')}}
@endsection

@section('buttons')
    {!! Form::open(['route'=>'settings.users.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
        {{trans('botones.save')}}</button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.users.index')}}">{{trans('botones.cancel')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @section('password_confirm')
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirm Password') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>
    @endsection
    @include('settings.users.partials.inputs')
    {!! Form::close() !!}
@endsection
