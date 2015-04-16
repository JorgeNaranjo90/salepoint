@section('vertical_nav')
    <li class="">
        <a href="{{ route('settings.users.index') }}"> {{trans('users.users')}}</a>
        <a href="{{ route('settings.company.index') }}">{{trans('company.company')}}</a>
        <h5>{{trans('users.general_settings')}}</h5>
        <a href="{{ route('settings.fiscalRegimen.index') }}">{{trans('fiscalRegimen.fiscalRegimen')}}s</a>
        <a href="{{ route('settings.currency.index') }}">{{trans('currency.currency')}}</a>
        <a href="{{ route('taxs.index') }}">{{trans('tax.tax')}}</a>

        <a href="{{ route('settings.uoms.index') }}">{{trans('uoms.uom')}}</a>
        <a href="{{ route('paymentMethods.index') }}">{{trans('paymentMethods.typePayment')}}</a>
        <a href="{{ route('settings.certificatesats.index') }}">{{trans('certificate_sats.certificate_sat')}}</a>
        <a href="{{ route('settings.country.index') }}">{{trans('country.country')}}</a>
        <a href="{{ route('settings.state.index') }}">{{trans('state.state')}}</a>
        <a href="{{ route('settings.city.index') }}">{{trans('city.city')}}</a>
    </li>
@endsection

