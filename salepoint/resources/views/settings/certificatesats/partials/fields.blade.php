<div class="row">
    <div class="form-group col-lg-12">
        {!! Form::label('name', trans('certificate_sats.name')) !!}
        {!! Form::text('name',null,['class' => 'form-control requiered_field','placeholder' => trans('certificate_sats.certificate_sat_name') ]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('certificateFile', trans('certificate_sats.certificate_file')) !!}
        {!! Form::file('certificateFile',['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('certificatePemFile', trans('certificate_sats.certificate_pem_file')) !!}
        {!! Form::file('certificatePemFile',['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('certificateKeyTitle', trans('certificate_sats.certificate_key')) !!}
        {!! Form::file('certificateKeyTitle',['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-lg-6">
        {!! Form::label('certificateKeyPemFile', trans('certificate_sats.certificate_key_pem')) !!}
        {!! Form::file('certificateKeyPemFile',['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('noSerie', trans('certificate_sats.number_serie')) !!}
        {!! Form::text('noSerie',null,['class' => 'form-control','placeholder' => trans('certificate_sats.number_serie') ]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('startDate', trans('certificate_sats.start_date')) !!}
        {!! Form::date('startDate',null,['class' => 'form-control','placeholder' => trans('certificate_sats.start_date')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('endDate', trans('certificate_sats.end_date')) !!}
        {!! Form::date('endDate',null,['class' => 'form-control','placeholder' => trans('certificate_sats.end_date')]) !!}
    </div>

</div>
