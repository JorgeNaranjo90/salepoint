<table class="table table-striped" border=1 cellspacing=0 cellpadding=2 bordercolor="#F0EEED">

    @include('partners.partials.fields_table')
    @foreach($partners as $partner)
        <tr onclick="window.document.location='{{ route('partners.show', $partner->id) }}';">
            <td> <img src="data:image/png;base64,{{ $partner->image }}" width="50px" height="50px"/></td>
            <td>{{ $partner->name }} </td>
            <td>{{ $partner->lastName}}</td>
            <td> {{ $partner->rfc }}</td>
            <td> {{ $partner->phone }}</td>
            <td> {{ $partner->email }}</td>
            <td> {{ $partner->city_name }}</td>
            <td> {{ $partner->state_name }}</td>
            <td> {{ $partner->country_name }}</td>
        </tr>
    @endforeach
</table>