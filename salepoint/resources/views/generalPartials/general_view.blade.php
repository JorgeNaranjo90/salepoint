@extends('app')
@section('content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>
                    @yield('title')
                </h3>
                <h5>
                    @yield('head')
                </h5>
                <div class="row" style="margin-left: 3px">
                    <div class="col-lg-6 pull-left">
                        <div class="row">
                            <div class="pull-right">
                                @yield('button_delete')
                            </div>
                            <div class="pull-left">
                                @yield('buttons')
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pull-right">
                        @yield('filters')
                    </div>
                </div>
            </div>
            @if (Session::has('message'))
                <p class="alert alert-success">
                    {{ Session::get('message') }}
                </p>
            @endif
            <div class="panel-body">
                @include('generalPartials.errors')
                @yield('body_page')
            </div>
        </div>
    </div>
@endsection
