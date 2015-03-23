@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Comapny</div>
                    <div class="panel-body">
                        <div class="pull-left">
                            <a class="btn btn-success" href="{{route('settings.company.create')}}"> <i class="fa fa-user-plus"></i> Create</a>
                            @include('settings.companys.partials.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection