<table class="table table-striped">
    <tr>
        <th>{{trans('tax.name')}}</th>
        <th>{{trans('tax.code')}}</th>
        <th>{{trans('tax.value')}}</th>
    </tr>
    @foreach($taxs as $tax)
        <tr onclick="window.document.location='{{ route('taxs.show', $tax->id) }}';">
            <td>{{ $tax->name}}</td>
            <td> {{ $tax->code }}</td>
            <td> {{ $tax->value }}</td>
        </tr>
    @endforeach
</table>

