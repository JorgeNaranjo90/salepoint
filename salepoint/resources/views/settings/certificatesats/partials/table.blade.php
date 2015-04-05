<table class="table table-striped">
    @include('settings.certificatesats.partials.fields_table')
    @foreach($certificatesats as $certificatesat)
        <tr onclick="window.document.location='{{ route('settings.certificatesats.show', $certificatesat->id) }}';">
            <td>{{ $certificatesat->name }} </td>
            <td>{{$certificatesat->noSerie}}</td>
            <td>{{$certificatesat->startDate}}</td>
            <td>{{$certificatesat->endDate}}</td>
        </tr>
    @endforeach
</table>

