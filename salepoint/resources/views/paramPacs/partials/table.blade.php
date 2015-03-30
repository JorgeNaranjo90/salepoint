<table class="table table-striped">
    <tr>
        <th>name</th>
        <th>methodType</th>
        <th>urlWebService</th>
        <th>nameSpace</th>
        <th>userPac</th>
        <th>passwordPac</th>
        <th>certificateLink</th>
        <th>activate</th>
    </tr>
    @foreach($param as $param)
        <tr onclick="window.document.location='{{ route('paramPacs.show', $param->id) }}';">


            <td>{{ $param->name }} </td>
            <td>{{ $param->methodType}}</td>
            <td> {{ $param->urlWebService }}</td>
            <td> {{ $param->nameSpace }}</td>
            <td> {{ $param->userPac }}</td>
            <td> {{ $param->passwordPac }}</td>
            <td> {{ $param->certificateLink }}</td>
            <td> {{ $param->active }}</td>
        </tr>
    @endforeach
</table>

