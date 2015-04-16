@include('partners.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('partners.edit_partner')}} {{ $partner->name }}
@endsection

@section('button_delete')
    @include('partners.partials.delete')
@endsection

@section('buttons')
{!! Form::model($partner, ['route'=>['partners.update',$partner->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm" > <i class="fa fa-floppy-o" ></i>{{trans('general.save')}}</button>
<a class="btn btn-danger btn-sm" href="{{route('partners.index')}}"><i class="fa fa-times"></i>{{trans('general.cancel')}}</a>
<a class="btn btn-success btn-sm" href="{{route('partners.create')}}"><i class="fa fa-user-plus"></i>{{trans('general.create')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('partners.partials.fields')
    {!! Form::close() !!}
@endsection
