<table  class="table table-striped">
    <tr>
        <th>name</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    @foreach($fiscal as $fiscal)
        <tr onclick="window.document.location='{{ route('settings.fiscalRegimen.show', $fiscal->id) }}';">
            <td>{{$fiscal->name}}</td>
            <td>{{$fiscal->description}}</td>
            <td>
                <a href ={{route('settings.fiscalRegimen.edit',$fiscal) }}>Update</a>
            </td>
        </tr>
    @endforeach
</table>
