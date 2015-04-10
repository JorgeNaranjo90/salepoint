@section('vertical_nav')
    <li class="">
        <a href="{{ route('products.index') }}">Products</a>
        <h5>Warehouse</h5>
        <h6>&nbsp;&nbsp;&nbsp;&nbsp;{{trans('general.reports')}}</h6>
        <a href="/products/report">{{trans('products.report_generalr')}}</a>
        <a href="/products/reportmin">{{trans('products.report_minr')}}</a>
        <a href="/products/reportmax">{{trans('products.report_maxr')}}</a>
    </li>
@endsection