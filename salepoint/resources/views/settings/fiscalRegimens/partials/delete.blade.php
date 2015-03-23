{!! Form::open(['route'=>['settings.fiscalRegimen.destroy', $fiscal->id],'method'=>'DELETE'])!!}

  <button type="submit" onclick="return confirm('Seguro que desea eliminar?')"class="btn btn-danger">Eliminar Fiscal Regimen</button>

{!!Form::close()!!}