@extends('generalPartials.reporttemplate')
@section('title')
    {{$title}}
@endsection

@section('content')
<table class="table_column_border table_alter_color_row table_title_bg_color" width="100%">

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
@endsection