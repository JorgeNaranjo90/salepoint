@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('city.edit')}}  {{trans('city.city')}}: <b>{{ $city->name }}</b>
@endsection
@section('buttons')

@section('button_delete')
    @include('settings.citys.partials.delete')
@endsection
{!! Form::model($city, ['route'=>['settings.city.update',$city->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
    {{trans('general.save')}}
</button>
<a class="btn btn-danger btn-sm" href="{{route('settings.city.index')}}"><i class="fa fa-times"></i> {{trans('general.cancel')}}</a>
<a class="btn btn-success btn-sm" href="{{route('settings.city.create')}}"><i class="fa fa-user-plus"></i>
    {{trans('general.create')}}
</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    @include('settings.citys.partials.fields')
    {!! Form::close() !!}
@endsection

