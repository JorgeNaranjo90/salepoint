<table  class="table table-striped">
    <tr>
        <th>  {{trans('city.name')}}</th>
        <th>  {{trans('city.code')}}</th>
        <th>  {{trans('city.abbreviation')}}</th>
        <th>  {{trans('city.state')}}</th>
    </tr>
    @foreach($city as $city)
        <tr onclick="window.document.location='{{ route('settings.city.show', $city->id) }}';">
            <td>{{$city->name}}</td>
            <td>{{$city->code}}</td>
            <td>{{$city->abbreviation}}</td>
            <td>{{$city->states->name}}</td>

            @endforeach
</table>


