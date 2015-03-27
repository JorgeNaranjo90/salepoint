@section('vertical_nav')
    <li class="">
        <a href="{{ route('settings.users.index') }}">Users</a>
<<<<<<< HEAD
        <a href="{{ route('settings.company.index') }}">Company</a>
        <h5>General Settings</h5>
        <a href="{{ route('settings.fiscalRegimen.index') }}">Fiscal Regimens</a>
        <a href="{{ route('settings.currency.index') }}"> Currency</a>

=======
        <a href="{{ route('partners.index') }}">Partners</a>
        <a href="{{ route('settings.users.index') }}">Company</a>
        <a href="{{ route('settings.users.index') }}">General Settings</a>
>>>>>>> 2fd7a5954c152ad187012fdf3f93f03490ecc42e
    </li>
@endsection