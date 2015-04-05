@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('state.state')}}
@endsection

@section('buttons')
@section('button_delete')
    @include('settings.states.partials.delete')
@endsection
<a class="btn btn-info btn-sm" href="{{ route('settings.state.edit', $state->id) }}"><i class="fa fa-pencil"></i>
    {{trans('state.edit')}}
</a>
<a class="btn btn-success btn-sm" href="{{ route('settings.state.create') }}"><i class="fa fa-user-plus"></i>
    {{trans('state.create')}}
</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    <div class="col-lg-2">
    </div>
    <div class="col-lg-9">
        <h1>{{ $state->name }}</h1>
    </div>
@endsection