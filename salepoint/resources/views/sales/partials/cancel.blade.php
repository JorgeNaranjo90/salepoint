{!! Form::open(['route'=>['sales.update',$sale_order->id],'method'=>'PUT']) !!}
    <button type="submit" onclick="return confirm('Are you sure cancel this sale?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
    {{trans('botones.cancel')}}
    </button>
{!! Form::close() !!}