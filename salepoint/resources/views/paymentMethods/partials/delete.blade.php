{!! Form::open(['route'=>['paymentMethods.destroy', $payment->id],'method'=>'DELETE'])!!}

<button type="submit" onclick="return confirm('Sure you want to delete?')"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
    {!!Form::label(trans('paymentMethods.delete'))   !!}
</button>

{!!Form::close()!!}

