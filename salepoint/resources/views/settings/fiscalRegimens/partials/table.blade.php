<table  class="table table-striped">
    <tr>
        <th>#</th>
        <th>name</th>
        <th>Actions</th>
    </tr>
    @foreach($fiscal as $fiscal)
        <tr>
            <td>{{$fiscal->id}}</td>
            <td>{{$fiscal->name}}</td>
            <td>
                <a href ={{route('settings.fiscalRegimen.edit',$fiscal) }}>Editar</a>
            </td>
        </tr>
    @endforeach
</table>



