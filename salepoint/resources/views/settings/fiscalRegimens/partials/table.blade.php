<table  class="table table-striped">
    <tr>
        <th>#</th>
        <th>name</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    @foreach($fiscal as $fiscal)
        <tr>
            <td>{{$fiscal->id}}</td>
            <td>{{$fiscal->name}}</td>
            <td>{{$fiscal->description}}</td>
            <td>
                <a href ={{route('settings.fiscalRegimen.edit',$fiscal) }}>Update</a>
            </td>
        </tr>
    @endforeach
</table>



