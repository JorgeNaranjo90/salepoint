{!! Form::model(Request::only(['typePayment']),['route'  => 'paymentMethods.index',
'method' => 'GET',
'class'  => 'navbar-left pull-right',
'role'   => 'search',
])!!}
<div class="input-group">
    {!! Form::text('typePayment', trans('paymentMethods.Search'), ['class' => 'form-control input-sm', 'placeholder' => 'Search']) !!}
        <span class="input-group-btn">
            <button class="btn btn-default btn-sm" type="submit"><i class="fa fa-search"></i></button>
          </span>
</div><!-- /input-group -->
{!! Form::close() !!}