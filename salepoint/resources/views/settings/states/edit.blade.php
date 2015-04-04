@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('state.edit')}}  {{trans('state.state')}}: <b>{{ $state->name }}</b>
@endsection
@section('buttons')

@section('button_delete')
    @include('settings.states.partials.delete')
@endsection
{!! Form::model($state, ['route'=>['settings.state.update',$state->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
    {{trans('state.save')}}
</button>
<a class="btn btn-danger btn-sm" href="{{route('settings.state.index')}}"><i class="fa fa-times"></i>Cancel</a>
<a class="btn btn-success btn-sm" href="{{route('settings.state.create')}}"><i class="fa fa-user-plus"></i>
    {{trans('state.create')}}
</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('settings.states.partials.fields')
    {!! Form::close() !!}
@endsection

