{!! Form::open(['route'=>['settings.currency.destroy', $currency->id],'method'=>'DELETE'])!!}

<button type="submit" onclick="return confirm('Sure you want to delete?')"class="btn btn-danger">Delete Currency</button>

{!!Form::close()!!}