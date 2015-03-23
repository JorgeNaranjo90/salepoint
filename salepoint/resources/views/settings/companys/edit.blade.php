@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Company {{$company->id}}}</div>
                    <div class="panel-body">
                        {!!Form::model($company,['route'=>['settings.company.update',$currency->id], 'nethod'=>'PUT']) !!}
                        @include('settings.companys.partials.field')
                        <button type="summit" class="btn btn-success"><i class ="fa fl-floppy-o"></i>Update</button>
                        {!!  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection