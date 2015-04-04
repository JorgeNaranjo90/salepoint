<table  class="table table-striped">
    <tr>
        <th>  {{trans('country.name')}}</th>
        <th>  {{trans('country.code')}}</th>
        <th>  {{trans('country.abbreviation')}}</th>
    </tr>
    @foreach($country as $country)
        <tr onclick="window.document.location='{{ route('settings.country.show', $country->id) }}';">
            <td>{{$country->name}}</td>
            <td>{{$country->code}}</td>
            <td>{{$country->abbreviation}}</td>
        </tr>
    @endforeach
</table>