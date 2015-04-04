<table class="table table-striped">
    <tr>
        <th>{!!Form::label(trans('paramPacs.name'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.methodType'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.urlWebService'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.nameSpace'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.userPac'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.passwordPac'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.certificateLink'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.activate'))   !!}</th>
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

