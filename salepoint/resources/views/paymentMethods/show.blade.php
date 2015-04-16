@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Payment Method
@endsection

@section('buttons')
@section('button_delete')
    @include('paymentMethods.partials.delete')
@endsection
<a class="btn btn-info btn-sm" href="{{ route('paymentMethods.edit', $payment->id) }}"><i class="fa fa-pencil"></i>
    {{trans('general.edit')}}
</a>
<a class="btn btn-success btn-sm" href="{{ route('paymentMethods.create') }}"><i class="fa fa-user-plus"></i>
    {{trans('general.create')}}
</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    <div class="col-lg-2">
    </div>
    <div class="col-lg-9">
        <h1>{{ $payment->name }}</h1>
    </div>
@endsection