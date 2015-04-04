@section('vertical_nav')
    <li class="">
        <a href="{{ route('settings.users.index') }}"> Users</a>
        <a href="{{ route('partners.index') }}">Partners</a>
        <a href="{{ route('products.index') }}">Products</a>
        <a href="{{ route('settings.company.index') }}">Company</a>
        <h5>General Settings</h5>
        <a href="{{ route('settings.fiscalRegimen.index') }}">Fiscal Regimens</a>
        <a href="{{ route('settings.currency.index') }}"> Currency</a>
        <a href="{{ route('taxs.index') }}">Taxs </a>
        <a href="{{ route('settings.uoms.index') }}"> Uom</a>
        <a href="{{ route('settings.certificatesats.index') }}">Certificate Sat</a>
        <a href="{{ route('paymentMethods.index') }}">Payment Methods</a>
        <a href="{{ route('settings.country.index') }}">Country</a>
        <a href="{{ route('settings.state.index') }}">State</a>
        <a href="{{ route('settings.city.index') }}">City</a>
    </li>
@endsection