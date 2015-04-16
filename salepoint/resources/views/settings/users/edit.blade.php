@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('botones.edit')}} {{trans('users.users')}}: <b>{{ $user->name }}</b>
@endsection


@section('button_delete')
    @include('settings.users.partials.delete')
@endsection

@section('buttons')
    {!! Form::model($user, ['route'=>['settings.users.update',$user->id],'method'=>'PUT','files'=>true, 'name'=>'save_edit']) !!}
        <button type="submit" onclick="save_edit()" name="save" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
            {{trans('general.save')}}
        </button>
        <a class="btn btn-danger btn-sm" href="{{route('settings.users.index')}}"><i class="fa fa-times"></i>{{trans('general.cancel')}}</a>
        <a class="btn btn-success btn-sm" href="{{route('settings.users.create')}}"><i class="fa fa-user-plus"></i>
            {{trans('general.create')}}
        </a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('settings.users.partials.inputs')
    {!! Form::close() !!}
@endsection