<table  class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Symbol</th>
    </tr>
    @foreach($currency as $currency)
        <tr onclick="window.document.location='{{ route('settings.currency.show', $currency->id) }}';">
            <td>{{$currency->name}}</td>
            <td>{{$currency->symbol}}</td>
        </tr>
    @endforeach
</table>