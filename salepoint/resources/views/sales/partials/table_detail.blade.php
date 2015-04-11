<table class="table table-striped table-hover">
    <tr>
        <th> {{trans('sale_order_lines.name')}}</th>
        <th> {{trans('sale_order_lines.qty')}}</th>
        <th> {{trans('sale_order_lines.unitPrice')}}</th>
        <th> {{trans('sale_order_lines.subtotal')}}</th>
    </tr>
    @foreach ($sale_order_lines as $sale_order_line)
        <tr>
            <td>{{ $sale_order_line->name }}</td>
            <td>{{ $sale_order_line->qty }}</td>
            <td>{{ $sale_order_line->unitPrice }}</td>
            <td>{{ $sale_order_line->subtotal }}</td>
        </tr>
    @endforeach
</table>