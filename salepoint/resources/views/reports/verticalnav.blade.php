@section('vertical_nav')
    <li class="">
        <h6>&nbsp;&nbsp;&nbsp;&nbsp;{{trans('partners.reports')}}</h6>
        <a href="/partners/report">{{trans('partners.general_partners')}}</a>
        <a href="/partners/reportCustomer">{{trans('partners.customers')}}</a>
        <a href="/partners/reportSupplier">{{trans('partners.suppliers')}}</a>
        <h5>Warehouse</h5>
        <h6>&nbsp;&nbsp;&nbsp;&nbsp;{{trans('general.reports')}}</h6>
        <a href="/products/report">{{trans('products.report_generalr')}}</a>
        <a href="/products/reportmin">{{trans('products.report_minr')}}</a>
        <a href="/products/reportmax">{{trans('products.report_minr')}}</a>
    </li>
@endsection