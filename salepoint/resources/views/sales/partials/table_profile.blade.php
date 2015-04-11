<div class="col-lg-10">
    <h1>{{$sale_order->id}}</h1>
    <h2>{{$sale_order->name}}</h2>
    <table cellspacing="10" width="100%">
        <tr>
            <td valign="top" width="20%">
                <p><b>Id</b></p>
            </td>
            <td width="80%">
                <p>{{$sale_order->id}}</p>
            </td>
        </tr>
        <tr>
            <td valign="top" width="20%">
                <p><i class="fa fa-building"></i> <b>Name</b></p>
            </td>
            <td width="80%">
                <p>{{$sale_order->name}}</p>
            </td>
        </tr>
    </table>
</div>


