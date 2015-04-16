{!! Form::open(['route'=>['settings.certificatesats.destroy',$certificatesat],'method'=>'DELETE']) !!}
<button type="submit" onclick="return confirm('Are you sure delete this Certificate Sat?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{trans('general.delete')}}</button>
{!! Form::close() !!}