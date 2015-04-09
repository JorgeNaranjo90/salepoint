@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {!!Form::label(trans('paramPacs.edit'))   !!} ParamPacs: <b>{{ $param->name }}</b>
@endsection
@section('buttons')

@section('button_delete')
    @include('paramPacs.partials.delete')
@endsection
{!! Form::model($param, ['route'=>['paramPacs.update',$param->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
    {{trans('botones.save')}}
</button>
<a class="btn btn-danger btn-sm" href="{{route('paramPacs.index')}}"><i class="fa fa-times"></i>
    {{trans('botones.cancel') }}
</a>
<a class="btn btn-success btn-sm" href="{{route('paramPacs.create')}}"><i class="fa fa-user-plus"></i>
    {{trans('botones.create') }}
</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('paramPacs.partials.fields')
    {!! Form::close() !!}
@endsection

