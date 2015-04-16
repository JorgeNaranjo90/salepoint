@include('products.verticalnav')
@extends('generalPartials.general_view')

@section('title')
     {{ trans('products.edit_product'), $product->name }}
@endsection

@section('buttons')

    @section('button_delete')
            @include('products.partials.delete')
    @endsection
    {!! Form::model($product, ['route'=>['products.update',$product->id],'method'=>'PUT','files'=>true]) !!}
        <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i> {{trans('general.save')}}</button>
        <a class="btn btn-danger btn-sm" href="{{route('products.index')}}"><i class="fa fa-times"></i>{{trans('general.cancel')}}</a>
        <a class="btn btn-success btn-sm" href="{{route('products.create')}}"><i class="fa fa-user-plus"></i> {{trans('general.create')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('products.partials.inputs')
    {!! Form::close() !!}
@endsection