{!! Form::open(['route'=>['taxs.destroy',$tax],'method'=>'DELETE']) !!}
<button type="submit" onclick="return confirm('Are you sure delete this tax?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{trans('general.delete')}}</button>
{!! Form::close() !!}