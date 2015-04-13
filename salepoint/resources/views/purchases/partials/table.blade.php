<table class="table table-striped table-hover">
    <tr>
        <th><b>No. Order</b></th>
        <th><b>Proveedor</b></th>
        <th><b>Fecha</b></th>
        <th><b>Total</b></th>
        <th><b>Estado</b></th>
    </tr>
    @foreach ($purchaseOrders as $purchase)
        @if($purchase->status === 'cancel')
            <tr onclick="window.document.location='{{ route('purchases.show', $purchase->id) }}';" class="danger">
        @endif
        @if($purchase->status === 'validate')
                <tr onclick="window.document.location='{{ route('purchases.show', $purchase->id) }}';" class="warning">
        @endif
        @if($purchase->status === 'done')
                <tr onclick="window.document.location='{{ route('purchases.show', $purchase->id) }}';">
        @endif
            <td>PO{{ $purchase->id }}</td>
            <td>{{ $purchase->partner->name }}</td>
            <td>{{ $purchase->purchase_order_time }}</td>
            <td>{{ $purchase->total }}</td>
            <td>{{ $purchase->status }}</td>
        </tr>
    @endforeach
</table>