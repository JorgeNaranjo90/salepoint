@section('vertical_nav')
    <li class="">
        <a href="{{ view('products.index.customer') }}">Partners</a>
        <a href="{{ route('products.index') }}">Products</a>
        <h5>Sales General Settings</h5>
        <a href="{{ route('settings.uoms.index') }}"> Uom</a>
    </li>
@endsection