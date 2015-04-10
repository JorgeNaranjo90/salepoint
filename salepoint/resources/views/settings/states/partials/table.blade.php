<table  class="table table-striped">
    <tr>
        <th> {{trans('state.name')}}</th>
        <th> {{trans('state.code')}}</th>
        <th> {{trans('state.abbreviation')}}</th>
        <th> {{trans('state.country')}}</th>
    </tr>
    @foreach($state as $state)
        <tr onclick="window.document.location='{{ route('settings.state.show', $state->id) }}';">
            <td>{{$state->name}}</td>
            <td>{{$state->code}}</td>
            <td>{{$state->abbreviation}}</td>
            <td>{{$state->country->name}}</td>
        </tr>
    @endforeach
</table>
