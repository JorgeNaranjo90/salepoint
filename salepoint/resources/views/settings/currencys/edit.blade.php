@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {!!Form::label(trans('currency.edit')) !!} {!!Form::label(trans('currency.currency')) !!}: <b>{{ $currency->name }}</b>
@endsection

@section('buttons')

@section('button_delete')
    @include('settings.currencys.partials.delete')
@endsection
{!! Form::model($currency, ['route'=>['settings.currency.update',$currency->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
    {{trans('botones.save')}}
</button>
<a class="btn btn-danger btn-sm" href="{{route('settings.currency.index')}}"><i class="fa fa-times"></i>
    {{trans('botones.cancel')}}
</a>
<a class="btn btn-success btn-sm" href="{{route('settings.currency.create')}}"><i class="fa fa-user-plus"></i>
    {{trans('botones.create')}}
</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('settings.currencys.partials.fields')
    {!! Form::close() !!}
@endsection