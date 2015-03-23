@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">New Partners</div>
                <div class="panel-body">

                    @include('partners.partials.messages_errors')


                    {!! Form::open(['route' => 'partners.store', 'method' => 'POST']) !!}
                        @include('partners.partials.fields')
                        <button type="submit"  class="btn btn-success">Save </button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection