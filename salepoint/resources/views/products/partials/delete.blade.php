{!! Form::open(['route'=>['products.destroy',$product->id],'method'=>'DELETE']) !!}
    <button type="submit" onclick="return confirm('Are you sure delete this product?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
    {{trans('botones.delete')}}
    </button>
{!! Form::close() !!}