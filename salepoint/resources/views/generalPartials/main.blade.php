<div class="row">
    @if(empty(Auth::guest()))
        <div class="col-lg-2" style="padding-left: 0.0em; padding-right: 0.0em;">
            @include('generalPartials.verticalnav')
        </div>
        <div class="col-lg-10">
    @else
        <div class="col-lg-12">
    @endif
            <div id="content">
                @yield('content')
            </div>
        </div>
</div>