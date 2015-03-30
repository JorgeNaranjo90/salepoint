@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Edit ParamPacs: <b>{{ $param->name }}</b>
@endsection
@section('buttons')

@section('button_delete')
    @include('paramPacs.partials.delete')
@endsection
{!! Form::model($param, ['route'=>['paramPacs.update',$param->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i> Save</button>
<a class="btn btn-danger btn-sm" href="{{route('paramPacs.index')}}"><i class="fa fa-times"></i>Cancel</a>
<a class="btn btn-success btn-sm" href="{{route('paramPacs.create')}}"><i class="fa fa-user-plus"></i> Create</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('paramPacs.partials.fields')
    {!! Form::close() !!}
@endsection

