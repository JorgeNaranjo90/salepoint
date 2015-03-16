@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Edit User: <b>{{ $user->name }}</b></div>
				<div class="panel-body">
                    @include('generalPartials.errors')
                    {!! Form::model($user, ['route'=>['settings.users.update',$user->id],'method'=>'PUT']) !!}
                        @include('settings.users.partials.inputs')
                        <button type="submit" class="btn btn-info"><i class="fa fa-floppy-o"></i> Save</button>
                    {!! Form::close() !!}
                </div>
                @include('settings.users.partials.delete')
            </div>
		</div>
	</div>
</div>
@endsection