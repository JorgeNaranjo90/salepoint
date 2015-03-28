{!! Form::open(['route'=>['settings.uoms.destroy',$uom->id],'method'=>'DELETE']) !!}
    <button type="submit" onclick="return confirm('Are you sure delete this uom?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
{!! Form::close() !!}