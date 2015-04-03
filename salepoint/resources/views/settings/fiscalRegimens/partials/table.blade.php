<table  class="table table-striped">
    <tr>
        <th>{!!Form::label(trans('fiscalRegimen.Name')) !!}</th>
        <th>{!!Form::label(trans('fiscalRegimen.Description')) !!}</th>
    </tr>
    @foreach($fiscal as $fiscal)
        <tr onclick="window.document.location='{{ route('settings.fiscalRegimen.show', $fiscal->id) }}';">
            <td>{{$fiscal->name}}</td>
            <td>{{$fiscal->description}}</td>
        </tr>
    @endforeach
</table>
