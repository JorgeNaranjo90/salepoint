@extends('app_pos')

<!-- Esta linea va de cajon -->
@extends('generalPartials.general_view_pos')

@section('title')
    Point of Sale
@endsection

@section('buttons')
@endsection

@section('filters')
@endsection

@section('body_page')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    @include('POS.partials.scripts')
    @include('POS.partials.pos_main')
@endsection
