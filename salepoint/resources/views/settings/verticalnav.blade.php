@section('vertical_nav')
    <li class="">
        <a href="{{ route('settings.users.index') }}">Users</a>
        <a href="{{ route('settings.company.index') }}">Company</a>
        <a href="{{ route('partners.index') }}">Partners</a>
        <a href="{{ route('paymentMethods.index') }}">Payment Methods</a>
        <h5>General Settings</h5>
        <a href="{{ route('settings.fiscalRegimen.index') }}">Fiscal Regimens</a>
        <a href="{{ route('settings.currency.index') }}"> Currency</a>
    </li>
@endsection