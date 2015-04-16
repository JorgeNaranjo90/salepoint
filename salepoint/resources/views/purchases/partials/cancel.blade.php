@if($purchase_order->status != 'done' && $purchase_order->status != 'cancel' )
    {!! Form::model($purchase_order, ['route'=>['purchases.update',$purchase_order->id],'method'=>'PUT', 'name'=>'save_edit']) !!}
        <button type="submit" onclick="save_edit()" name="save" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
            {{trans('general.cancel')}}
        </button>
        <input type="hidden" name="status" id="status" value="cancel"/>
    {!! Form::close() !!}
@endif