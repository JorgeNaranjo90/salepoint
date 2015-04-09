@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Profile Certificate
@endsection

@section('buttons')
@section('button_delete')
    @include('settings.certificatesats.partials.delete')
@endsection


<a class="btn btn-info btn-sm" href="{{ route('settings.certificatesats.edit', $certificatesat->id) }}"><i class="fa fa-pencil"></i> {{trans('botones.edit')}}</a>
<a class="btn btn-success btn-sm" href="{{ route('settings.certificatesats.create') }}"><i class="fa fa-user-plus"></i> {{trans('botones.create')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    <div class="col-lg-10">
        <h1>{{ $certificatesat->name }}</h1>
        <table cellspacing="10" width="100%">
            <tr>
                <td valign="top" width="20%">
                    <p><i class="fa fa-building"></i> <b>{{trans('certificate_sats.description')}} 1</b></p>
                </td>
                <td width="80%">
                    <p>{{ $certificatesat->name .", ".$certificatesat->certificateKeyTitle.", ".$certificatesat->certificatePemFile}}</p>

                </td>
            </tr>
            <tr>

                <td valign="top" width="20%">
                    <p><i class="fa fa-building"></i> <b>{{trans('certificate_sats.description')}} 2</b></p>
                </td>
                <td width="80%">
                    <p>{{ $certificatesat->certificateWeyPemTitle.", ".$certificatesat->noSerie }}</p>

                </td>
            </tr>
            <tr>

                <td valign="top" width="20%">
                    <p><i class="fa fa-building"></i> <b>{{trans('certificate_sats.description')}} 3</b></p>
                </td>
                <td width="80%">
                    <p>{{ $certificatesat->startDate.", ".$certificatesat->endDate }}</p>

                </td>
            </tr>
        </table>
    </div>
@endsection