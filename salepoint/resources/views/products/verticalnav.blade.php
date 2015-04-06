@section('vertical_nav')
    <li class="">
        <a href="{{ route('products.index') }}">Products</a>
        <h5>Warehouse</h5>
        <h6>&nbsp;&nbsp;&nbsp;&nbsp;Reports</h6>
        <a href="/products/report">Products</a>
        <a href="/products/reportmin">Products minimums</a>
        <a href="/products/reportmax">Products maximums</a>
    </li>
@endsection