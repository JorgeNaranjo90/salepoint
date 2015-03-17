@include('settings.verticalnav')
@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Users</div>

                @if (Session::has('message'))
                    <p class="alert alert-success">
                        {{ Session::get('message') }}
                    </p>
                @endif
				<div class="panel-body">
                    <div class="pull-left">
                        <a class="btn btn-success" href="{{route('settings.users.create')}}"><i class="fa fa-user-plus"></i> Create</a>
                    </div>
                    <div class="pull-right">
                        <p>{!! $users->total() !!} Users</p>
                    </div>
                    @include('settings.users.partials.table_index')
					{!! $users->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
