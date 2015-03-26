@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Edit Fiscal Regimen: <b>{{ $fiscal->name }}</b>
@endsection
@section('buttons')

@section('button_delete')
    @include('settings.fiscalRegimens.partials.delete')
@endsection
{!! Form::model($fiscal, ['route'=>['settings.fiscalRegimen.update',$fiscal->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i> Save</button>
<a class="btn btn-danger btn-sm" href="{{route('settings.fiscalRegimen.index')}}"><i class="fa fa-times"></i>Cancel</a>
<a class="btn btn-success btn-sm" href="{{route('settings.fiscalRegimen.create')}}"><i class="fa fa-user-plus"></i> Create</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('settings.fiscalRegimens.partials.fields')
    {!! Form::close() !!}
@endsection

