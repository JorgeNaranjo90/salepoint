{!! Form::open(['route'=>['settings.users.destroy',$user->id],'method'=>'DELETE']) !!}
    <button type="submit" onclick="return confirm('Are you sure delete this user?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
{!! Form::close() !!}