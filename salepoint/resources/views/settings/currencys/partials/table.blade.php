<table  class="table table-striped">
    <tr>
        <th>{{ trans('currency.name') }}</th>
        <th>{{ trans('currency.symbol') }}</th>
    </tr>
    @foreach($currency as $currency)
        <tr onclick="window.document.location='{{ route('settings.currency.show', $currency->id) }}';">
            <td>{{$currency->name}}</td>
            <td>{{$currency->symbol}}</td>
        </tr>
    @endforeach
</table>