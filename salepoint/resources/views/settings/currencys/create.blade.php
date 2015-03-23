@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New Currency</div>
                    <div class="panel-body">
                        @include('settings.currencys.partials.error')
                        {!! Form::open(['route'=>'settings.currency.store','method'=>'POST']) !!}
                        @include('settings.currencys.partials.fields')
                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection