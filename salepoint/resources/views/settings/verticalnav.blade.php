@section('vertical_nav')
    <!--<li class="">
        <a href="#glyphicons">Glyphicons</a>
        <ul class="nav">
            <li class=""><a href="#glyphicons-glyphs">Available glyphs</a></li>
            <li><a href="#glyphicons-how-to-use">How to use</a></li>
            <li><a href="#glyphicons-examples">Examples</a></li>
        </ul>
    </li>
    <li class="">
        <a href="#btn-groups">Button groups</a>
        <ul class="nav">
            <li><a href="#btn-groups-single">Basic example</a></li>
            <li><a href="#btn-groups-toolbar">Button toolbar</a></li>
            <li class=""><a href="#btn-groups-sizing">Sizing</a></li>
            <li><a href="#btn-groups-nested">Nesting</a></li>
            <li><a href="#btn-groups-vertical">Vertical variation</a></li>
            <li class=""><a href="#btn-groups-justified">Justified button groups</a></li>
        </ul>
    </li>-->
    <li class="">
        <a href="{{ route('settings.users.index') }}">Users</a>
        <a href="{{ route('settings.users.index') }}">Company</a>
        <a href="{{ route('settings.users.index') }}">General Settings</a>
    </li>

@endsection