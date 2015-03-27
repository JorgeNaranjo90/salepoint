<div class="row">
    <div class="form-group col-lg-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Tax Name' ]) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('code', 'Code:') !!}
        {!! Form::text('code',null,['class' => 'form-control','placeholder' => 'Tax Code']) !!}
    </div>
    <div class="form-group col-lg-3">
        {!! Form::label('value', 'Value:') !!}
        {!! Form::number('value',null,['class' => 'form-control','placeholder' => 'Tax Value']) !!}
    </div>
</div>