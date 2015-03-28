@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Profile Tax
@endsection

@section('buttons')
@section('button_delete')
    @include('taxs.partials.delete')
@endsection


<a class="btn btn-info btn-sm" href="{{ route('taxs.edit', $tax->id) }}"><i class="fa fa-pencil"></i> Edit</a>
<a class="btn btn-success btn-sm" href="{{ route('taxs.create') }}"><i class="fa fa-user-plus"></i> Create</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    <div class="col-lg-10">
        <h1>{{ $tax->name }}</h1>
        <table cellspacing="10" width="100%">
            <tr>
                <td valign="top" width="20%">
                    <p><i class="fa fa-building"></i> <b>Description</b></p>
                </td>
                <td width="80%">
                    <p>{{ $tax->name .", ".$tax->code.", ".$tax->value}}</p>

                </td>
            </tr>
        </table>
    </div>
@endsection