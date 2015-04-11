{!! Form::open(['route'=>['$sale_orders.update',$sale_orders->id],'method'=>'UPDATE']) !!}
    <button type="submit" onclick="return confirm('Are you sure cancel this sale?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
    {{trans('botones.cancel')}}
    </button>
{!! Form::close() !!}