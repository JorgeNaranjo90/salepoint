<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th> Number Serie</th>
        <th>Start Date</th>
        <th>End Date</th>
    </tr>
    @foreach($certificatesats as $certificatesat)
        <tr onclick="window.document.location='{{ route('settings.certificatesats.show', $certificatesat->id) }}';">

            <td>{{ $certificatesat->name }} </td>
            <td>{{$certificatesat->noSerie}}</td>
            <td>{{$certificatesat->startDate}}</td>
            <td>{{$certificatesat->endDate}}</td>
        </tr>
    @endforeach
</table>

