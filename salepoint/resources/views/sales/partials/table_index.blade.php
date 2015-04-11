<table class="table table-striped table-hover">
 {{--@include('sales.partials.fields_table')--}}
    <tr>
        <th> {{trans('Name')}}  </th>
        <th> {{trans('Partner')}} </th>
        <th> {{trans('Subtotal')}} </th>
        <th> {{trans('Discount')}} </th>
        <th> {{trans('Total')}} </th>
        <th> {{trans('Status')}} </th>
    </tr>
    @foreach ($sale_orders as $saleOrder)
        @if($saleOrder->status === 'cancel')
        <tr onclick="window.document.location='{{ route('sales.show', $saleOrder->id) }}';" class="danger">
        @else
        <tr onclick="window.document.location='{{ route('sales.show', $saleOrder->id) }}';">
        @endif
                <td>{{ $saleOrder->name }}</td>
                <td>{{ $saleOrder->partner_id}}</td>
                <td>{{ $saleOrder->subTotal }}</td>
                <td>{{ $saleOrder->discount }}</td>
                <td>{{ $saleOrder->total }}</td>
                <td>{{ $saleOrder->status }}</td>
        </tr>
    @endforeach
</table>