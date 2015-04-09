@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{ trans('certificate_sats.edit_certificate'),$certificatesat->name }}
@endsection

@section('buttons')
@section('button_delete')
    @include('settings.certificatesats.partials.delete')
@endsection

{!! Form::model($certificatesat, ['route'=>['settings.certificatesats.update',$certificatesat->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm"> <i class="fa fa-floppy-o" ></i> {{trans('botones.save')}}</button>
<a class="btn btn-danger btn-sm" href="{{route('settings.certificatesats.index')}}"><i class="fa fa-times"></i>{{trans('botones.cancel')}}</a>
<a class="btn btn-success btn-sm"   href="{{route('settings.certificatesats.create')}}"><i class="fa fa-user-plus"></i> {{trans('botones.create')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('settings.certificatesats.partials.fields')
    {!! Form::close() !!}
@endsection
