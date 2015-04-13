@include('purchases.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Purchase order
@endsection

@section('buttons')

    @if($purchase_order->status != 'done' && $purchase_order->status != 'cancel')
        {!! Form::model($purchase_order, ['route'=>['purchases.update',$purchase_order->id],'method'=>'PUT', 'name'=>'save_edit']) !!}
            <button type="submit" onclick="save_edit()" name="save" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i>
                Done
            <input type="hidden" name="status" id="status" value="done"/>
        {!! Form::close() !!}
    @endif

    @section('button_delete')
        @include('purchases.partials.cancel')
    @endsection
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('purchases.partials.table_detail')
@endsection