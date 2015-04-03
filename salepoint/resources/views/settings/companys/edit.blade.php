@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Edit Company: <b>{{ $company->name }}</b>
@endsection

@section('buttons')

@section('button_delete')
    @include('settings.companys.partials.delete')
@endsection
{!! Form::model($company, ['route'=>['settings.company.update',$company->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
    {!!Form::label(trans('company.Save')) !!}
</button>
<a class="btn btn-danger btn-sm" href="{{route('settings.company.index')}}"><i class="fa fa-times"></i>
    {!!Form::label(trans('company.Cancel')) !!}
</a>
<a class="btn btn-success btn-sm" href="{{route('settings.company.create')}}"><i class="fa fa-user-plus"></i>
    {!!Form::label(trans('company.Create')) !!}
</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('settings.companys.partials.field')
    {!! Form::close() !!}
@endsection