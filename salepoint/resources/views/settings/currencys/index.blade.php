@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Currency</div>
                    @if (\Illuminate\Support\Facades\Session::has('message'))
                        <p class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('message')}}</p>
                    @endif
                    <div class="panel-body">
                            {!! Form::open(['route'=>'settings.currency.index','method'=> 'GET', 'class'=> 'navbar-form navbar-left pull-right','role'=>'search'])!!}
                            <div class="form-group">
                                {!!Form::text('name', null,['class'=>'form-control','placeholder'=>'Name of Currency'])  !!}
                            </div>
                            <button type="submit" clas="btn btn-default">Search</button>
                           {!! Form::close()!!}
                            <p>{!! $currency->total() !!} Currency</p>
                            @include('settings.currencys.partials.table')
                        <a class="btn btn-success" href="{{route('settings.currency.create')}}"> <i class="fa fa-user-plus"></i> Create</a>
                            {!! $currency->appends(Request::only(['name']))->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




