@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {!!Form::label(trans('fiscalRegimen.FiscalRegimen')) !!}
@endsection

@section('buttons')
@section('button_delete')
    @include('settings.fiscalRegimens.partials.delete')
@endsection
<a class="btn btn-info btn-sm" href="{{ route('settings.fiscalRegimen.edit', $fiscal->id) }}"><i class="fa fa-pencil"></i>
    {!!Form::label(trans('fiscalRegimen.Edit')) !!}
</a>
<a class="btn btn-success btn-sm" href="{{ route('settings.fiscalRegimen.create') }}"><i class="fa fa-user-plus"></i>
    {!!Form::label(trans('fiscalRegimen.Create')) !!}
</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    <div class="col-lg-2">
    </div>
    <div class="col-lg-9">
        <h1>{{ $fiscal->name }}</h1>
    </div>
@endsection