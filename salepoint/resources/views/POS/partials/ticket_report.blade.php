<center>
<div>
    <table>
        <tr><td><h1><b>{{$company->name}}</b></h1></td></tr>
        <tr><td>{{$company->partners->street .' '.$company->partners->noExt .' '.$company->partners->noInt}}</td></tr>
        <tr><td>{{$company->partners->colony .' '.$company->partners->zip .' '.$company->partners->locality}}</td></tr>
        <tr><td>{{$company->partners->country->name .' '.$company->partners->state->name .' '.$company->partners->city->name }}</td></tr>
    </table>
    <table>
        <tr><td>{{$saleOrder->partner->name}}</td></tr>
        <tr><td>{{$saleOrder->partner->rfc}}</td></tr>
    </table>
    <table style="text-align: center">
        <tr>
            <td>Descripción</td>
            <td>Cantidad</td>
            <td>Precio Unitario</td>
            <td>SubTotal</td>
        </tr>
        @foreach($saleOrder->sale_order_lines as $sol)
            <tr>
                <td>{{ $sol->name}}</td>
                <td>{{ $sol->qty}}</td>
                <td>{{ $sol->unitPrice}}</td>
                <td>{{ $sol->subTotal}}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="2"></td>
            <td></td>
            <td>_______________</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td>SubTotal</td>
            <td>{{ $saleOrder->subTotal }}</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td>Descuento</td>
            <td>{{ $saleOrder->discount }}</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td>Total</td>
            <td>{{ $saleOrder->total }}</td>
        </tr>
    </table>
    <table>
        <tr><td><img src="/images/barcode.png" width="200px" height="80px"/></td></tr>
        <tr><td>Fecha: {{$saleOrder->sale_order_time}}</td></tr>
    </table>
</div>