@extends('app')

@section('content')
    <div class="container">
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Partners</div>

                    <div class="panel-body">
                        <p>
                            <a class="btn btn-success" href="{{route('partners.create')}}" role="button">
                                New User
                            </a>
                        </p>
                        @include('partners.partials.table');
                        {!! $partners->render() !!}
                    </div>
            </div>
        </div>
    </div>
@endsection
