{!! Form::open(['route'=>['settings.currency.destroy', $currency->id],'method'=>'DELETE'])!!}

<button type="submit" onclick="return confirm('Seguro que desea eliminar?')"class="btn btn-danger">Eliminar Fiscal Regimen</button>

{!!Form::close()!!}