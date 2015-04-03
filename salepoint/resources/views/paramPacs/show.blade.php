@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    ParamPacs
@endsection

@section('buttons')
@section('button_delete')
    @include('paramPacs.partials.delete')
@endsection
<a class="btn btn-info btn-sm" href="{{ route('paramPacs.edit', $param->id) }}"><i class="fa fa-pencil"></i> Edit</a>
<a class="btn btn-success btn-sm" href="{{ route('paramPacs.create') }}"><i class="fa fa-user-plus"></i> Create</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    <div class="col-lg-2">
    </div>
    <div class="col-lg-9">
        <h1>name:{{ $param->name }}</h1>
        <h4> methodType: {{ $param->methodType }}</h4>
        <h4>urlWebService: {{ $param->urlWebService }}</h4>
        <h4>nameSpace: {{ $param->nameSpace }}</h4>
        <h4>userPac: {{ $param->userPac }}</h4>
        <h4>passwordPac: {{ $param->passwordPac }}</h4>
        <h4>certificateLink: {{ $param->certificateLink }}</h4>
        <h4>active: {{ $param->active }}</h4>



    </div>
@endsection