@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')

    {{trans('company.edit') }}  {{trans('company.company') }}: <b>{{ $company->name }}</b>
@endsection

@section('buttons')

@section('button_delete')
    @include('settings.companys.partials.delete')
@endsection
{!! Form::model($company, ['route'=>['settings.company.update',$company->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
   {{trans('general.save')}}
</button>
<a class="btn btn-danger btn-sm" href="{{route('settings.company.index')}}"><i class="fa fa-times"></i>
    {{trans('general.cancel')}}
</a>
<a class="btn btn-success btn-sm" href="{{route('settings.company.create')}}"><i class="fa fa-user-plus"></i>
    {{trans('general.create')}}
</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('settings.companys.partials.field')
    {!! Form::close() !!}
@endsection