{!! Form::model(Request::only(['name']),['route'  => 'paramPacs.index',
'method' => 'GET',
'class'  => 'navbar-left pull-right',
'role'   => 'search',
])!!}
<div class="input-group">
    {!! Form::text('name', trans('botones.search'), ['class' => 'form-control input-sm', 'placeholder' => 'Search']) !!}
        <span class="input-group-btn">
            <button class="btn btn-default btn-sm" type="submit"><i class="fa fa-search"></i></button>
          </span>
</div>
{!! Form::close() !!}
