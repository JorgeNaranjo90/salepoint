<table class="table table-striped">
    <tr>
        <th>{!!Form::label(trans('paramPacs.Name'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.MethodType'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.UrlWebService'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.NameSpace'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.UserPac'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.PasswordPac'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.CertificateLink'))   !!}</th>
        <th>{!!Form::label(trans('paramPacs.Activate'))   !!}</th>
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

