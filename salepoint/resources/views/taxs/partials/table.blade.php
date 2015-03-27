<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Code</th>
        <th>Value</th>
    </tr>
    @foreach($taxs as $tax)
        <tr onclick="window.document.location='{{ route('taxs.show', $tax->id) }}';">
            <td>{{ $tax->name}}</td>
            <td> {{ $tax->code }}</td>
            <td> {{ $tax->value }}</td>
        </tr>
    @endforeach
</table>

