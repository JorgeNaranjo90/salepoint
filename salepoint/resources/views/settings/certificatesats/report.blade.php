<table class="table table-striped" border=1 cellspacing=0 cellpadding=2 bordercolor="#F0EEED">
    @include('settings.certificatesats.partials.fields_table')
    @foreach($certificatesats as $certificatesat)
        <tr onclick="window.document.location='{{ route('settings.certificatesats.show', $certificatesat->id) }}';">

            <td>{{ $certificatesat->name }} </td>
            <td>{{$certificatesat->certificateKeyTitle}}</td>
            <td>{{$certificatesat->certificatePemFile}}</td>
            <td>{{$certificatesat->certificateWeyPemTitle}}</td>
            <td>{{$certificatesat->noSerie}}</td>
            <td>{{$certificatesat->startDate}}</td>
            <td>{{$certificatesat->endDate}}</td>
        </tr>
    @endforeach
</table>