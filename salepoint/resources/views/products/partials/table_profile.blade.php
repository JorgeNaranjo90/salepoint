<div class="col-lg-10">
    <h1>{{$product->name}}</h1>
    <h2>{{$product->description}}</h2>
    <table cellspacing="10" width="100%">
        <tr>
            <td valign="top" width="20%">
                <p><b>Code</b></p>
            </td>
            <td width="80%">
                <p>{{$product->ean13}}</p>
            </td>
        </tr>
        <tr>
            <td valign="top" width="20%">
                <p><i class="fa fa-building"></i> <b>Warehouse</b></p>
            </td>
            <td width="80%">
                <p>{{"QtyAvailable: ".$product->qtyAvailable .", IncomingQty:   ".$product->incomingQty.", VirtualAvailable:    ".$product->virtualAvailable}}</p>
            </td>
        </tr>
        <tr>
            <td valign="top" width="20%">
                <p><i class="fa fa-building"></i> <b>Prices</b></p>
            </td>
            <td width="80%">
                <p>{{"Purchase Price:   ".$product->purchasePrice .", Sale Price:   ".$product->salePrice}}</p>
            </td>
        </tr>
        <tr>
            <td valign="top" width="20%">
                <p><i class="fa fa-building"></i> <b>Uom</b></p>
            </td>
            <td width="80%">
                <p>{{$product->uom->name}}</p>
            </td>
        </tr>
    </table>
</div>


