<div class="col-lg-10">
    <h1>{{ $partner->name." ".$partner->lastName }}</h1>
    <table cellspacing="10" width="100%">
        <tr>
            <td valign="top" width="20%">
                <p><i class="fa fa-building"></i> <b>Address</b></p>
            </td>
            <td width="80%">
                <p>{{ $partner->street .", ".$partner->noExt.", ".$partner->noInt}}</p>
                <p>{{ "Col. ".$partner->colony.", CP. ".$partner->zip.", ".$partner->locality }}</p>
                <p> {{ $partner->city_name . ", ".$partner->state_name.", ".$partner->country_name }}</p>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <p><i class="fa fa-birthday-cake "></i><b> Birthdate</b> </p>
            </td>
            <td>
                <p>{{ $partner->birthdate }}</p>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <p><i class="fa fa-key "></i> <b>VAT</b></p>
            </td>
            <td>
                <p>{{ $partner->rfc }}</p>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <p><i class="fa fa-mobile"></i><b> Phones</b></p>
            </td>
            <td>
                <p>{{ $partner->phone.", ".$partner->mobile }}</p>
                <p>{{$partner->fax}}</p>
            </td>

        </tr>
        <tr>
            <td valign="top">
                <p><i class="fa fa-envelope"></i><b> Email</b></p>
            </td>
            <td>
                <p>{{$partner->email}}</p>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <p><i class="fa fa-users"></i><b> Customer  </b></p>
            </td>
            <td>
                <input type="checkbox" name="customer"
                @if($partner->customer == 1)
                       checked
                       @endif
                       disabled/>

            </td>
        </tr>
        <tr>
            <td valign="top">
                <p><i class="fa fa-users"></i><b> Supplier </b></p>
            </td>
            <td>
                <input type="checkbox" name="supplier"
                @if($partner->supplier == 1)
                       checked
                       @endif
                       disabled/>
            </td>
        </tr>
    </table>
</div>
