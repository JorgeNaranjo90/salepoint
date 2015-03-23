@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Currency: {{$currency->name}}</div>
                    <div class="panel-body">
                        @include('generalPartials.errors')
                        {!! Form::model($currency,['route'=>['settings.currency.update',$currency->id],'method'=>'PUT']) !!}
                        @include('settings.currencys.partials.fields')
                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i>Update</button>
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('settings.currencys.partials.delete')
            </div>
        </div>
    </div>
@endsection