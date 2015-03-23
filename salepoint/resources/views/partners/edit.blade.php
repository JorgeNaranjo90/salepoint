@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Partners</div>
                    <div class="panel-body">
                        @include('partners.partials.messages_errors')
                        {!! Form::model($partner, ['route' => ['partners.update', $partner->id],'method' => 'PUT']) !!}
                            @include('partners.partials.fields')
                            <button type="submit"  class="btn btn-success"  >Update </button>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection