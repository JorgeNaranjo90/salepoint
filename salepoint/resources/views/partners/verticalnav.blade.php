@section('vertical_nav')
    <li class="">
        <a href="{{ route('partners.index') }}">{{trans('partners.general_partners')}}</a>
        <a href="{{ route('partners.customer') }}">{{trans('partners.customers')}}</a>
        <a href="{{ route('partners.supplier') }}">{{trans('partners.suppliers')}}</a>
        <h6>&nbsp;&nbsp;&nbsp;&nbsp;{{trans('partners.reports')}}</h6>
        <a href="/partners/report">{{trans('partners.general_partners')}}</a>
        <a href="/partners/reportCustomer">{{trans('partners.customers')}}</a>
        <a href="/partners/reportSupplier">{{trans('partners.suppliers')}}</a>
    </li>
@endsection