<table  class="table table-striped">
    <tr>
        <th>#</th>
        <th>name</th>
        <th>Actions</th>
    </tr>
    @foreach($currency as $currency)
        <tr>
            <td>{{$currency->id}}</td>
            <td>{{$currency->name}}</td>
            <td>
                <a href ={{route('settings.currency.edit',$currency) }}>Editar</a>
            </td>
        </tr>
    @endforeach
</table>