<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Certificate Key</th>
        <th>Certificate Pem File</th>
        <th>Certificate Pem Wey File</th>
        <th> Number Serie</th>
        <th>Start Date</th>
        <th>End Date</th>
    </tr>
    @foreach($certificatesats as $certificatesat)
        <tr onclick="window.document.location='{{ route('settings.certificatesats.show', $certificatesat->id) }}';">

            <td>{{ $certificatesat->name }} </td>
            <td>{{$certificatesat->certificateKeyTitle}}</td>
            <td>{{$certificatesat->certificatePemFile}}</td>
            <td>{{$certificatesat->certificateWeyPemTitle}}</td>
            <td>{{$certificatesat->noSerie}}</td>
            <td>{{$certificatesat->startDate}}</td>
            <td>{{$certificatesat->noSerie}}</td>
        </tr>
    @endforeach
</table>

