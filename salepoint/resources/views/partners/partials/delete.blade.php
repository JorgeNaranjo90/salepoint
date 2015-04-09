{!! Form::open(['route'=>['partners.destroy',$partner],'method'=>'DELETE']) !!}
<button type="submit" onclick="return confirm('Are you sure delete this partner?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
    {{trans('botones.delete')}}
</button>
{!! Form::close() !!}