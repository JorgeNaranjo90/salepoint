@section('vertical_nav')
    <li class="">
        <a href="{{ route('settings.users.index') }}"> {{trans('users.users')}}</a>
        <a href="{{ route('partners.index') }}">{{trans('partners.partners')}}</a>
        <a href="{{ route('products.index') }}">{{trans('products.products')}}</a>
        <a href="{{ route('settings.company.index') }}">{{trans('company.company')}}</a>
        <h5>{{trans('users.general_settings')}}</h5>
        <a href="{{ route('settings.fiscalRegimen.index') }}">{{trans('fiscalRegimen.fiscalRegimen')}}s</a>
        <a href="{{ route('settings.currency.index') }}">{{trans('currency.currency')}}</a>
        <a href="{{ route('taxs.index') }}">Taxs</a>
        <a href="{{ route('settings.uoms.index') }}"> Uom</a>
        <a href="{{ route('settings.certificatesats.index') }}">{{trans('certificate_sats.certificate_sat')}}</a>
        <a href="{{ route('paymentMethods.index') }}">{{trans('paymentMethods.typeMethods')}}</a>
        <a href="{{ route('settings.country.index') }}">Country</a>
        <a href="{{ route('settings.state.index') }}">State</a>
        <a href="{{ route('settings.city.index') }}">City</a>
    </li>
@endsection