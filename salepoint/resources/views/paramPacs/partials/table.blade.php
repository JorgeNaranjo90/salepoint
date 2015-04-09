<table class="table table-striped">
    <tr>
        <th>{{trans('paramPacs.name')   }}</th>
        <th>{{trans('paramPacs.methodType')}}</th>
        <th>{{trans('paramPacs.urlWebService')}}</th>
        <th>{{trans('paramPacs.nameSpace')}}</th>
        <th>{{trans('paramPacs.userPac')  }}</th>
        <th>{{trans('paramPacs.passwordPac')}}</th>
        <th>{{trans('paramPacs.certificateLink')}}</th>
        <th>{{(trans('paramPacs.activate'))}}   </th>
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

