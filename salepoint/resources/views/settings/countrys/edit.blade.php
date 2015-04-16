@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('country.edit')}} {{trans('country.country')}}: <b>{{ $country->name }}</b>
@endsection

@section('buttons')

@section('button_delete')
    @include('settings.countrys.partials.delete')
@endsection
{!! Form::model($country, ['route'=>['settings.state.update',$country->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
    {{trans('general.save')}}
</button>
<a class="btn btn-danger btn-sm" href="{{route('settings.country.index')}}"><i class="fa fa-times"></i>{{trans('general.cancel')}}</a>
<a class="btn btn-success btn-sm" href="{{route('settings.country.create')}}"><i class="fa fa-user-plus"></i>
    {{trans('general.create')}}
</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('settings.countrys.partials.fields')
    {!! Form::close() !!}
@endsection