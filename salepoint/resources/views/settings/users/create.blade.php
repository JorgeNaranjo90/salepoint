@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('users.users')}} {{trans('general.create')}}
@endsection

@section('buttons')
    {!! Form::open(['route'=>'settings.users.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
        {{trans('botones.save')}}</button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.users.index')}}">{{trans('general.cancel')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @section('password_confirm')
        <div class="form-group col-lg-6">
            {!! Form::label('password_confirmation', trans('users.confirm_password')) !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control','placeholder'=> trans('users.user_confirm_password')]) !!}
        </div>
    @endsection
    @include('settings.users.partials.inputs')
    {!! Form::close() !!}
@endsection
