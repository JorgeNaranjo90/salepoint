@include('settings.verticalnav')
@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">New User</div>
				<div class="panel-body">
                    @include('generalPartials.errors')
                    {!! Form::open(['route'=>'settings.users.store','method'=>'POST']) !!}
                        @include('settings.users.partials.inputs')
                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
                    {!! Form::close() !!}
                </div>
			</div>
		</div>
	</div>
</div>
@endsection