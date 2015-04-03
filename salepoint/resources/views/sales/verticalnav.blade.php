@section('vertical_nav')
    <li class="">
        <a href="{{ route('sales.index') }}">Sale Orders</a>
        <a href="{{ route('partners.customer') }}">Customers</a>
        <a href="{{ route('products.index') }}">Products</a>
    </li>
@endsection