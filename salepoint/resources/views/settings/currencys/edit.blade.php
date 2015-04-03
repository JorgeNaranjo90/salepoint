@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Edit Currency: <b>{{ $currency->name }}</b>
@endsection

@section('buttons')

@section('button_delete')
    @include('settings.currencys.partials.delete')
@endsection
{!! Form::model($currency, ['route'=>['settings.currency.update',$currency->id],'method'=>'PUT','files'=>true]) !!}
<button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
    {!!Form::label(trans('currency.Save')) !!}
</button>
<a class="btn btn-danger btn-sm" href="{{route('settings.currency.index')}}"><i class="fa fa-times"></i>
    {!!Form::label(trans('currency.Cancel')) !!}
</a>
<a class="btn btn-success btn-sm" href="{{route('settings.currency.create')}}"><i class="fa fa-user-plus"></i>
    {!!Form::label(trans('currency.Create')) !!}
</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('settings.currencys.partials.fields')
    {!! Form::close() !!}
@endsection