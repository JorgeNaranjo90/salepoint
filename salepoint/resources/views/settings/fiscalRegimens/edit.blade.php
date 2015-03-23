@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Fiscal Regimen: {{$fiscal->name}}</div>
                    <div class="panel-body">
                        @include('settings.fiscalRegimens.partials.error')
                        {!! Form::model($fiscal,['route'=>['settings.fiscalRegimen.update',$fiscal->id],'method'=>'PUT']) !!}
                        @include('settings.fiscalRegimens.partials.fields2')
                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i>Update</button>
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('settings.fiscalRegimens.partials.delete')
            </div>
        </div>
    </div>
@endsection