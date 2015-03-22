@include('settings.verticalnav')
@extends('app')
@section('content')
<div class="container">
	<div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Users</h3>
                <div class="row">
                    <div class="col-lg-6 pull-left">
                        <a class="btn btn-success btn-sm" href="{{route('settings.users.create')}}"><i class="fa fa-user-plus"></i> Create</a>
                    </div>
                    @include('settings.users.partials.filters')
                </div>
            </div>
            @if (Session::has('message'))
                <p class="alert alert-success">
                    {{ Session::get('message') }}
                </p>
            @endif
            <div class="panel-body">
                <!--<div class="pull-right">
                    <p>{!! $users->total() !!} Users</p>
                </div>-->
                @include('settings.users.partials.table_index')
                {!! $users->appends(Request::only(['name']))->render() !!}
            </div>
        </div>
	</div>
</div>
@endsection
