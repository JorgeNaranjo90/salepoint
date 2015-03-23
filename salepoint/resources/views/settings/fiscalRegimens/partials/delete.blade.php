{!! Form::open(['route'=>['settings.fiscalRegimen.destroy', $fiscal->id],'method'=>'DELETE'])!!}

  <button type="submit" onclick="return confirm('Sure you want to delete?')"class="btn btn-danger">Delete Fiscal Regimen</button>

{!!Form::close()!!}