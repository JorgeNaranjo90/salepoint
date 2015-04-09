@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('tax.edit')}} Tax: <b>{{ $tax->name }}</b>
@endsection

@section('buttons')
@section('button_delete')
    @include('taxs.partials.delete')
@endsection

{!! Form::model($tax, ['route'=>['taxs.update',$tax->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm" ><i class="fa fa-floppy-o" ></i> {{trans('botones.save')}}</button>
<a class="btn btn-danger btn-sm" href="{{route('taxs.index')}}"><i class="fa fa-times"></i>{{trans('botones.cancel')}}</a>
<a class="btn btn-success btn-sm" href="{{route('taxs.create')}}"><i class="fa fa-user-plus"></i> {{trans('botones.create')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('taxs.partials.fields')
    {!! Form::close() !!}
@endsection
