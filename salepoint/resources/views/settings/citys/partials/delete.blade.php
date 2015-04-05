{!! Form::open(['route'=>['settings.city.destroy', $city->id],'method'=>'DELETE'])!!}

<button type="submit" onclick="return confirm('Sure you want to delete?')"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
    {{trans('city.delete')}}
</button>

{!!Form::close()!!}

