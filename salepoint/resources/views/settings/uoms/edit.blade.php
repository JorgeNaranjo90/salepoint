@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('uoms.edit')}} Uom: <b>{{ $uom->name }}</b>
@endsection

@section('buttons')

    @section('button_delete')
            @include('settings.uoms.partials.delete')
    @endsection
    {!! Form::model($uom, ['route'=>['settings.uoms.update',$uom->id],'method'=>'PUT','files'=>true]) !!}
        <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>  {{trans('general.save')}}</button>
        <a class="btn btn-danger btn-sm" href="{{route('settings.uoms.index')}}"><i class="fa fa-times"></i> {{trans('general.cancel')}}</a>
        <a class="btn btn-success btn-sm" href="{{route('settings.uoms.create')}}"><i class="fa fa-user-plus"></i>  {{trans('general.create')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('settings.uoms.partials.inputs')
    {!! Form::close() !!}
@endsection