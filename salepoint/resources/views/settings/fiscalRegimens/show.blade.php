@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {!!Form::label(trans('fiscalRegimen.fiscal_Regimen')) !!}
@endsection

@section('buttons')
@section('button_delete')
    @include('settings.fiscalRegimens.partials.delete')
@endsection
<a class="btn btn-info btn-sm" href="{{ route('settings.fiscalRegimen.edit', $fiscal->id) }}"><i class="fa fa-pencil"></i>
    {{trans('botones.edit')}}
</a>
<a class="btn btn-success btn-sm" href="{{ route('settings.fiscalRegimen.create') }}"><i class="fa fa-user-plus"></i>
    {{trans('botones.create')}}
</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    <div class="col-lg-12 text-center">
        <h1>{{ $fiscal->name }}</h1>
    </div>
    <div class="col-lg-12">
        <p>{{ $fiscal->description }}</p>
    </div>
@endsection