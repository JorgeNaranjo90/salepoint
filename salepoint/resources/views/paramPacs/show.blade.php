@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
@endsection
ParamPacs

@section('buttons')
@section('button_delete')
    @include('paramPacs.partials.delete')
@endsection
<a class="btn btn-info btn-sm" href="{{ route('paramPacs.edit', $param->id) }}"><i class="fa fa-pencil"></i>
    {!!Form::label(trans('paramPacs.edit'))   !!}
</a>
<a class="btn btn-success btn-sm" href="{{ route('paramPacs.create') }}"><i class="fa fa-user-plus"></i>
    {!!Form::label(trans('paramPacs.create'))   !!}
</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    <div class="col-lg-2">
    </div>
    <div class="col-lg-9">
        <h1> {!!Form::label(trans('paramPacs.name')) !!}: {{ $param->name }}</h1>
        <h4>  {!!Form::label(trans('paramPacs.methodType'))  !!}: {{ $param->methodType }}</h4>
        <h4> {!!Form::label(trans('paramPacs.urlWebService'))  !!}: {{ $param->urlWebService }}</h4>
        <h4> {!!Form::label(trans('paramPacs.nameSpace'))  !!}: {{ $param->nameSpace }}</h4>
        <h4> {!!Form::label(trans('paramPacs.userPac'))  !!}: {{ $param->userPac }}</h4>
        <h4> {!!Form::label(trans('paramPacs.passwordPac'))  !!}: {{ $param->passwordPac }}</h4>
        <h4> {!!Form::label(trans('paramPacs.certificateLink'))  !!}: {{ $param->certificateLink }}</h4>
        <h4> {!!Form::label(trans('paramPacs.activate'))  !!}: {{ $param->active }}</h4>



    </div>
@endsection