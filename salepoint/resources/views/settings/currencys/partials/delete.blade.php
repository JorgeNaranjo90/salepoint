{!! Form::open(['route'=>['settings.currency.destroy', $currency->id],'method'=>'DELETE'])!!}

<button type="submit" onclick="return confirm('Sure you want to delete?')"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
    {!!Form::label(trans('currency.delete')) !!}
</button>

{!!Form::close()!!}