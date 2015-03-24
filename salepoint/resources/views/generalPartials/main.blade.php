<table width="100%" style="border-collapse: collapse; margin-top: 0px">
    <tr>
        @if (empty(Auth::guest()))
            <td width="15%" valign="top" style="display: table-cell; overflow:auto;">
                @include('generalPartials.verticalnav')
            </td>
        @endif
        <td valign="top" style="display: table-cell;">
            <div id="content">
                @yield('content')
            </div>
        </td>
    </tr>
</table>