<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class' => 'form-control requiered_field','placeholder' => 'Certificate Sat Name' ]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('certificateKeyTitle', 'Certificate Key:') !!}
        {!! Form::text('certificateKeyTitle',null,['class' => 'form-control','placeholder' => 'Certificate Key']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('certificatePemFile', 'Certificate File:') !!}
        {!! Form::file('certificatePemFile',null,['class' => 'form-control','placeholder' => 'Certificate File']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-5">
        {!! Form::label('certificateWeyPemTitle', 'Certificate Title:') !!}
        {!! Form::text('certificateWeyPemTitle',null,['class' => 'form-control','placeholder' => 'Certificate Title' ]) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('noSerie', 'Number Serie:') !!}
        {!! Form::text('noSerie',null,['class' => 'form-control','placeholder' => 'Number Serie' ]) !!}
    </div>
    <div class="form-group col-lg-2">
        {!! Form::label('startDate', 'Start Date:') !!}
        {!! Form::date('startDate',null,['class' => 'form-control','placeholder' => 'Start Date']) !!}
    </div>
    <div class="form-group col-lg-2">
        {!! Form::label('endDate', 'End Date:') !!}
        {!! Form::date('endDate',null,['class' => 'form-control','placeholder' => 'End Date']) !!}
    </div>

</div>
