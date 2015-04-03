@section('vertical_nav')
    <li class="">
        <a href="{{ route('purchases.index') }}">Purchases Orders</a>
        <a href="{{ route('partners.supplier') }}">Supplier</a>
        <a href="{{ route('products.index') }}">Products</a>
    </li>
@endsection