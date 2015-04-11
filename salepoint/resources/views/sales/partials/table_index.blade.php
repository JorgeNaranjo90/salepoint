<table class="table table-striped table-hover">
 @include('sales.partials.fields_table')
    @foreach ($sale_orders as $sale_order)
        <tr onclick="window.document.location='{{ route('sales.show', $sale_order->id) }}';">
                <td>{{ $sale_order->id }}</td>
                <td>{{ $sale_order->name }}</td>
                <td>{{ $sale_order->partner->name}}</td>
                <td>{{ $sale_order->subTotal }}</td>
                <td>{{ $sale_order->discount }}</td>
                <td>{{ $sale_order->total }}</td>
                <td>{{ $sale_order->status }}</td>
                <td>{{ $sale_order->created_at }}</td>
        </tr>
    @endforeach
</table>