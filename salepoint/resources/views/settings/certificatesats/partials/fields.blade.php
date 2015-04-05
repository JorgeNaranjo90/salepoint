<div class="row">
    <div class="form-group col-lg-5">
        {!! Form::label('name',trans('certificate_sats.name')) !!}
        {!! Form::text('name',null,['class' => 'form-control requiered_field','placeholder' => trans('certificate_sats.certificate_sat_name') ]) !!}
    </div>
    <div class="form-group col-lg-7">
        {!! Form::label('certificateKeyTitle', trans('certificate_sats.certificate_key_pem')) !!}
        {!! Form::text('certificateKeyTitle',null,['class' => 'form-control','placeholder' => trans('certificate_sats.certificate_key_pem')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('certificatePemFile', trans('certificate_sats.certificate_pem_file')) !!}
        {!! Form::file('certificatePemFile',null,['class' => 'form-control','placeholder' => trans('certificate_sats.certificate_pem_file')]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('certificateWeyPemTitle', trans('certificate_sats.certificate_pem_wey_file')) !!}
        {!! Form::text('certificateWeyPemTitle',null,['class' => 'form-control','placeholder' => trans('certificate_sats.certificate_pem_wey_file') ]) !!}
    </div>
    <div class="form-group col-lg-4">
        {!! Form::label('noSerie', trans('certificate_sats.number_serie')) !!}
        {!! Form::text('noSerie',null,['class' => 'form-control','placeholder' => trans('certificate_sats.number_serie')]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-3">
        {!! Form::label('startDate', trans('certificate_sats.start_date')) !!}
        {!! Form::date('startDate',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('endDate', trans('certificate_sats.end_date')) !!}
        {!! Form::date('endDate',null,['class' => 'form-control']) !!}
    </div>
</div>
