@section('vertical_nav')
    <li class="">
        <a href="{{ route('settings.users.index') }}">  Users</a>
        <a href="{{ route('partners.index') }}">Partners</a>
        <a href="{{ route('settings.users.index') }}">Company</a>
        <a href="{{ route('taxs.index') }}">Taxs </a>
        <a href="{{ route('settings.users.index') }}">General Settings</a>
        <a href="{{ route('settings.certificatesats.index') }}">Certificate Sat</a>
    </li>
@endsection