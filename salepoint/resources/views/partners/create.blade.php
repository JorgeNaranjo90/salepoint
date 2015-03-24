@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">New Partners</div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'partner.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Int Name']) !!}
                         </div>
                        <div class="form-group">

                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </fieldset>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection