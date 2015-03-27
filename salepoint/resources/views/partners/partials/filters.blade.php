{!! Form::model(Request::only(['name']),['route'  => 'partners.index',
'method' => 'GET',
'class'  => 'navbar-left pull-right',
'role'   => 'search',
])!!}
<div class="input-group">
    {!! Form::text('name', null, ['class' => 'form-control input-sm', 'placeholder' => 'Search']) !!}
        <span class="input-group-btn">
            <button class="btn btn-default btn-sm" type="submit"><i class="fa fa-search"></i></button>
          </span>
</div>
{!! Form::close() !!}
