<table class="table table-striped table-hover">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
    @foreach ($uoms as $uom)
        <tr onclick="window.document.location='{{ route('settings.uoms.show', $uom->id) }}';">
                <td>{{ $uom->id }}</td>
                <td>{{ $uom->name }}</td>
                <td>{{ $uom->description }}</td>
        </tr>
    @endforeach
</table>