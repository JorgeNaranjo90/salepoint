<div class="row">
    <div class="form-group col-lg-12">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class' => 'form-control requiered_field','placeholder' => 'Certificate Sat Name' ]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('certificateFile', 'Certificate File:') !!}
        {!! Form::file('certificateFile',['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('certificatePemFile', 'Certificate Pem File:') !!}
        {!! Form::file('certificatePemFile',['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('certificateKeyTitle', 'Certificate Key:') !!}
        {!! Form::file('certificateKeyTitle',['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('certificateKeyPemFile', 'Certificate Key Pem:') !!}
        {!! Form::file('certificateKeyPemFile',['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('noSerie', 'Number Serie:') !!}
        {!! Form::text('noSerie',null,['class' => 'form-control','placeholder' => 'Number Serie' ]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('startDate', 'Start Date:') !!}
        {!! Form::date('startDate',null,['class' => 'form-control','placeholder' => 'Start Date']) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('endDate', 'End Date:') !!}
        {!! Form::date('endDate',null,['class' => 'form-control','placeholder' => 'End Date']) !!}
    </div>

</div>
