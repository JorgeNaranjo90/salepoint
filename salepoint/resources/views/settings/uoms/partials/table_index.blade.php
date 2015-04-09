<table class="table table-striped table-hover">
    <tr>
        <th> {{trans('uoms.name')}}</th>
        <th> {{trans('uoms.description')}}</th>
    </tr>
    @foreach ($uoms as $uom)
        <tr onclick="window.document.location='{{ route('settings.uoms.show', $uom->id) }}';">
                <td>{{ $uom->name }}</td>
                <td>{{ $uom->description }}</td>
        </tr>
    @endforeach
</table>