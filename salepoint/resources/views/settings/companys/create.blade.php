@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New Company</div>
                    <div class="panel-body">
                       @include('settings.companys.partials.field')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection