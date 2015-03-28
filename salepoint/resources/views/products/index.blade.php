<!-- Esta linea hay que cambiarla por la de su respectivo menu-->
{{--@include('products.verticalnav')--}}

<!-- Esta linea va de cajon -->
@extends('generalPartials.general_view')


@section('title')
    Products
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('products.create')}}"><i class="fa fa-user-plus"></i> Create</a>
@endsection

@section('filters')
    @include('products.partials.filters')
@endsection


@section('body_page')
    @include('products.partials.table_index')
    {!! $products->appends(Request::only(['name']))->render() !!}
@endsection