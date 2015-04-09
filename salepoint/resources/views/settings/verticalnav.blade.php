@section('vertical_nav')
    <li class="">
        <a href="{{ route('settings.users.index') }}"> Users</a>
        <a href="{{ route('partners.index') }}">{{trans('partners.partners')}}</a>
        <a href="{{ route('products.index') }}">Products</a>
        <a href="{{ route('settings.company.index') }}">Company</a>
        <h5>General Settings</h5>
        <a href="{{ route('settings.fiscalRegimen.index') }}">{{trans('fiscalRegimen.fiscalRegimen')}}</a>
        <a href="{{ route('settings.currency.index') }}"> Currency</a>
        <a href="{{ route('taxs.index') }}">Taxs </a>
        <a href="{{ route('settings.uoms.index') }}"> Uom</a>
        <a href="{{ route('paymentMethods.index') }}">{{trans('paymentMethods.typePayment')}}</a>
        <a href="{{ route('settings.certificatesats.index') }}">{{trans('certificate_sats.certificate_sat')}}</a>
        <a href="{{ route('settings.country.index') }}">{{trans('country.country')}}</a>
        <a href="{{ route('settings.state.index') }}">{{trans('state.state')}}</a>
        <a href="{{ route('settings.city.index') }}">{{trans('city.city')}}</a>
    </li>
@endsection