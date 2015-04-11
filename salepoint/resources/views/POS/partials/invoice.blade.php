<style>
        .font_data_company1
        {
            font-style:oblique;
            font-size:10pt;
            text-align:right;
        }
        .table_all_border {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #eaeaea; }
        .table_all_border > thead > tr > th,
        .table_all_border > thead > tr > td,
        .table_all_border > tbody > tr > th,
        .table_all_border > tbody > tr > td,
        .table_all_border > tfoot > tr > th,
        .table_all_border > tfoot > tr > td {
            border: 1px solid #eaeaea; }
        .table_all_border > thead > tr > th,
        .table_all_border > thead > tr > td {
            border-bottom-width: 1px solid #eaeaea; }
        .table_title_bg_color {
            border-collapse: collapse;
            width: 100%; }
        .table_title_bg_color > thead > tr > th,
        .table_title_bg_color > tbody > tr > th,
        .table_title_bg_color > tfoot > tr > th {
            border-bottom: 1px solid #eaeaea;
            border-top: 1px solid #eaeaea;
            background-color: #444545;
            font-size: 9;
            color: white; }
        .table_title {
            border-collapse: collapse;
            width: 100%; }
        .table_title > thead > tr > th,
        .table_title > tbody > tr > th,
        .table_title > tfoot > tr > th {
            border-bottom: 2px solid #eaeaea;
            font-size: 9;
            color: white; }
        .table_row_border {
            border-collapse: collapse;
            width: 100%; }
        .table_row_border > thead > tr > th,
        .table_row_border > thead > tr > td,
        .table_row_border > tbody > tr > th,
        .table_row_border > tbody > tr > td,
        .table_row_border > tfoot > tr > th,
        .table_row_border > tfoot > tr > td {
            border-bottom: 1px solid #eaeaea; }
        .table_row_border > thead > tr > th,
        .table_row_border > thead > tr > td {
            border-bottom-width: 1px; }
        .table_column_border {
            border-collapse: collapse;
            width: 100%; }
        .table_column_border > thead > tr > td,
        .table_column_border > tbody > tr > td,
        .table_column_border > tfoot > tr > td {
            border: 1px solid #eaeaea;
            border-width: 0 1px; }
        .table_column_border > thead > tr > td:first-child, .table_column_border > thead > tr td + td,
        .table_column_border > tbody > tr > td:first-child,
        .table_column_border > tbody > tr td + td,
        .table_column_border > tfoot > tr > td:first-child,
        .table_column_border > tfoot > tr td + td {
            border-left: 0; }
        .table_column_border > thead > tr > td:last-child,
        .table_column_border > tbody > tr > td:last-child,
        .table_column_border > tfoot > tr > td:last-child {
            padding-right: 0;
            border-right: 0; }
        .table_alter_color_row {
            border-collapse: collapse;
            width: 100%; }
        .table_alter_color_row > tbody > tr:nth-child(2n+1) > td {
            background-color: whitesmoke; }
        .table_alter_color_row > tbody > tr:nth-child(2n+2) > td {
            background-color: #f0f0f0; }
        .table_alter_color_column {
            border-collapse: collapse;
            width: 100%; }
        .table_alter_color_column > tbody
        > tr
        > td:nth-child(2n+1) {
            background-color: whitesmoke; }
        .table_alter_color_column > tbody
        > tr
        > td:nth-child(2n+2) {
            background-color: #f0f0f0; }
        .table_only_border_top {
            border-collapse: collapse;
            width: 100%; }
        .table_only_border_top > tbody
        > tr {
            border-top: 1px solid #eaeaea; }
        .table_only_border_bottom {
            border-collapse: collapse;
            width: 100%; }
        .table_only_border_bottom > tbody
        > tr {
            border-bottom: 1px solid #eaeaea; }
        .panel {
            padding: 8px 8px;
            background-color: #5bc0de; }
        .panel_radius_color {
            border: 1px solid #deeff5;
            border-radius: 15px;
            padding: 8px 8px; }
        .panel_radius_trans {
            border: 1px solid transparent;
            border-radius: 15px;
            padding: 8px 8px; }
        .panel_bg_color {
            padding: 8px 8px;
            background: whitesmoke; }
        .panel_bg_color_title {
            padding: 8px 8px;
            background: #444545;
            color: white;
            font-size: 10;
            font-family: "Helvetica Neue", Helvetica, Arial, sans_serif; }
        .panel_box_shadow {
            box-shadow: 5px 5px 10px #222222; }
        .panel_bg_color_gradient {
            background: -webkit-linear-gradient(purple, gainsboro);
            /* For Safari */
            background: -o-linear-gradient(purple, gainsboro);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(purple, gainsboro);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(purple, gainsboro);
            /* Standard syntax (must be last) */ }
        .panel_border_radius_top {
            border-top-right-radius: 15px;
            border-top-left-radius: 15px;
            border: 1px solid #deeff5;
            padding: 5px; }
        .panel_radius_top {
            border-top-right-radius: 15px;
            border-top-left-radius: 15px;
            padding: 5px; }
        .panel_border_radius_top_right {
            border-top-right-radius: 15px;
            border: 1px solid #deeff5;
            padding: 5px; }
        .panel_border_radius_top_left {
            border-top-left-radius: 15px;
            border: 1px solid #deeff5;
            padding: 5px; }
        .panel_border_radius_bottom {
            border-bottom-right-radius: 15px;
            border-bottom-left-radius: 15px;
            border: 1px solid #deeff5;
            padding: 5px; }
        .panel_radius_bottom {
            border-bottom-right-radius: 15px;
            border-bottom-left-radius: 15px;
            padding: 5px; }
        .panel_border_radius_bottom_right {
            border-bottom-right-radius: 15px;
            border: 1px solid #deeff5;
            padding: 5px; }
        .panel_border_radius_bottom_left {
            border-bottom-left-radius: 15px;
            border: 1px solid #deeff5;
            padding: 5px; }
        body {
            color: black;
            font-family: "Helvetica Neue", Helvetica, Arial, sans_serif;
            font-size: 10pt;
            margin: 0;
            padding: 0;
            height: 100%;
            line-height: 12px; }
        table.basic_table {
            border-collapse: collapse;
            width: 100%; }
        .imagen_company {
            vertical-align: top;
            width: 35%; }
        .data_company_number_invoice {
            color: red; }
        .data_company_total_invoice {
            vertical-align: middle;
            font-family: "Helvetica Neue", Helvetica, Arial, sans_serif;
            font-size: 12;
            text-align: left;
            width: 65%;
            font-weight: bold;
            color: #383c3d;
            padding-left: 25px; }
        .data_emitter {
            vertical-align: top;
            color: black;
            text-align: left;
            font-size: 7.5pt; }
        .data_customer {
            vertical-align: top;
            color: black;
            text-align: right;
            font-size: 7.5pt; }
        td.sub_total_td {
            border-top: solid 1.5px #444545;
            font-size: 12;
            padding-right: 2px;
            padding-left: 2px;
            color: #383c3d; }
        td.total_td {
            border-top: solid 1.5px #444545;
            font-size: 13;
            padding-right: 2px;
            padding-left: 2px;
            color: #383c3d; }
        td.basic_td {
            font-size: 10;
            padding: 4px; }
        td.number_td {
            font-size: 10;
            padding: 4px;
            text-align: right;
            font-family: helvetica; }
        td.tax_td {
            font-size: 10;
            padding-right: 2px;
            padding-left: 2px;
            padding-top: 3px; }
        .center_td_amount_to_text {
            padding-right: 2px;
            padding-left: 2px;
            text-align: center;
            font-size: 10;
            font-style: oblique;
            font-weight: bold; }
        td.center_td_data_bank_text {
            padding-right: 2px;
            padding-left: 2px;
            text-align: center;
            font-size: 7pt; }
        td.center_td_data_fiscal {
            padding-right: 2px;
            padding-left: 2px;
            text-align: center;
            font-size: 10; }
        th {
            padding-right: 2px;
            padding-left: 2px;
            text-align: center;
            font-size: 10; }
        .datos_fiscales {
            font-size: 7pt; }
        .line_table_fiscales {
            page-break-inside: avoid;
            border: 1px solid #444545; }
        .line_table_fiscales_with_basic_table {
            page-break-inside: avoid;
            border: 1px solid #444545;
            border-collapse: collapse;
            width: 100%; }
        pre {
            font-size: 6pt;
            font-family: helvetica;
            white-space: pre-wrap;
            white-space: -moz-pre-wrap !important;
            white-space: -pre-wrap;
            white-space: -o-pre-wrap;
            word-wrap: break-word; }
        .color_border_right_date_number_invoice {
            border-right: 1px solid #deeff5; }
        .td_center {
            text-align: center; }
        .td_vertical_middle {
            vertical-align: middle; }
        .td_title_date_number_invoice {
            color: white;
            font-size: 10; }
        .td_date_invoice {
            color: white;
            font-size: 10; }
        font.p_title {
            color: #444545;
            font-size: 7pt;
            font-weight: bold; }
        .data_emitter_fiscal {
            color: black;
            font-size: 7pt;
            padding-top: 1px; }
        td.padding_table_special {
            padding: 1px; }
        .font_data_company1 {
            font-style: oblique;
            font-size: 7pt;
            text-align: right;
            color: #444545; }
    </style>
</head>
<body>
<table width="100%">
    <tr>
        <td width="100%" colspan=2>
            <div class="">
                <!-- TABLE OF IMAGEN, INVOICE NUMBER AND TOTAL HEADER OF INVOICE-->
                <table class="basic_table">
                    <tr>
                        <td class="imagen_company" >
                            <div class="text-center">
                                <img width="100px" height="100px" src="data:image/png;base64,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"/>
                            </div>
                        </td>
                        <td class="td_vertical_middle font_data_company1">
                            {{$company->partners->email}}<br>
                            {{$company->partners->phone}}<br>
                            {{$company->partners->mobile}}<br>
                            {{$company->partners->fax}}<br>
                        </td>
                    </tr>
                </table>
                <!-- CLOSE HEADER INVOICE -->
            </div>
        </td>
    </tr>


    <tr>
        <td width="40%" valign=top>
            <div class="panel_border_radius_top panel_bg_color_title td_vertical_middle td_center">
                <font style="color:#1E7FB8"></font>
            </div>
            <div class="panel_radius_trans panel_border_radius_bottom panel_bg_color" >
                <!-- CLOSE HEADER INVOICE -->
                <table width="100%" class="table_row_border td_vertical_middle td_center">
                    <tr>
                        <td width="40%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">Factura</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center data_company_number_invoice">
                                <font class="data_company_number_invoice">{{ 'SO'.$saleOrder->id}}</font>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="40%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">Date Invoice</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                {{$saleOrder->sale_order_time}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="40%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">Folio Fiscal</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                5107A15C-37E9-4578-A5B2-E8BA16EAD42B
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">Régimen:</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                {{$company->fiscalRegimens->name}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">Certificado del emisor</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                20001000000100005867
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">Certificado del SAT</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                20001000000100005761
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">M&eacute;todo de Pago</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                {{$saleOrder->paymentMethod}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">Fecha de Timbrado</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                {{$saleOrder->sale_order_time}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">Lugar. fecha y hora de emisión</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                {{$company->partners->country->name .', '.$company->partners->state->name .'. '.$company->partners->city->name }}
                                <br>
                                {{$saleOrder->sale_order_time}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td width="60%">
            <div class="">
                <table width="100%" class="">
                    <tr>
                        <td width="100%">
                            <div class="data_emitter panel_border_radius_top panel_bg_color_title td_vertical_middle td_center" style="color:white;">
                                <font class="">Emisor</font>
                            </div>
                            <div class="data_emitter panel_bg_color panel_border_radius_bottom td_vertical_middle td_center">
                                <h1><b>{{$company->name}}</b></h1>
                                <b>{{$company->partners->rfc}}</b>
                                </br>{{$company->partners->street .' '.$company->partners->noExt .' '.$company->partners->noInt}}
                                </br>{{$company->partners->colony .' '.$company->partners->zip .' '.$company->partners->locality}}
                                </br>{{$company->partners->country->name .' '.$company->partners->state->name .' '.$company->partners->city->name }}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="100%">
                            <div class="data_emitter panel_border_radius_top panel_bg_color_title td_vertical_middle td_center" style="color:white;">
                                <font class="">Cliente</font>
                            </div>
                            <div class="data_emitter panel_bg_color panel_border_radius_bottom td_vertical_middle td_center">
                                <h1><b>{{$saleOrder->partner->name}}</b></h1>
                                <b>{{$saleOrder->partner->rfc}}</b>
                                </br>{{$saleOrder->partner->street .' '.$saleOrder->partner->noExt .' '.$saleOrder->partner->noInt}}
                                </br>{{$saleOrder->partner->colony .' '.$saleOrder->partner->zip .' '.$saleOrder->partner->locality}}
                                </br>{{$saleOrder->partner->country->name .' '.$saleOrder->partner->state->name .' '.$saleOrder->partner->city->name }}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>

    <tr>
        <td width="100%" colspan=2>
            <div class="">
                <table class="table_column_border table_alter_color_row table_title_bg_color">
                    <tr>
                        <th width="10%">Cant.</th>
                        <th width="10%">Unidad</th>
                        <th>Descripci&oacute;n</th>
                        <th width="9%" >P.Unitario</th>
                        <th width="15%">Importe</th>
                    </tr>
                    @foreach($saleOrder->sale_order_lines as $sol)
                        <tr>
                            <td width="10%" class="number_td">{{ $sol->qty }}</td>
                            <td width="10%" class="basic_td">{{ $sol->product->uom->name }}</td>
                            <td class="basic_td">{{ $sol->name}}</td>
                            <td width="9%" class="number_td">{{ $sol->unitPrice }}</td>
                            <td width="15%" class="number_td">{{ $sol->subTotal }}</td>
                        </tr>
                    @endforeach

                </table>

                <!-- CLOSE TABLE INVOICE PRODUCTS -->

                <!-- TABLE OF TAXES, SUBTOTAL, TOTAL -->
                <table align="right" width="30%" style="border-collapse:collapse">
                    <tr>
                        <td class="sub_total_td">Sub Total:</td>
                        <td align="right" class="sub_total_td"> {{ $saleOrder->subTotal }}</td>
                    </tr>
                    <tr>
                        <td class="tax_td">IVA (16.0) % </td>
                        <td class="tax_td" align="right"> {{ $saleOrder->discount }}</td>
                    </tr>
                    <tr align="left">
                        <td class="total_td"><b>Total:</b></td>
                        <td class="total_td" align="right"><b> {{ $saleOrder->total }}</b></td>
                    </tr>
                </table>

                <!-- CLOSE TABLE -->

                <br clear="all" />

                <!-- CLOSE TABLE AMOUNT TO TEXT -->
            </div>
        </td>
    </tr>

    <tr>
        <td width="100%" colspan=2>
            <div class="panel_radius_trans panel_bg_color" >
                <!-- TABLE STRING FISCAL DATA -->
                <table width="100%" class="table_row_border">
                    <tr>
                        <td style="float:left" rowspan=4>
                            <img src="/images/qr.png" height="180" width="auto">
                        </td>
                        <td width="60%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">Sello Digital Emisor</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                mDUKZvB46pniNxwk1hNsc6FTnbbps5/yLZlxQavCuphdmXz92pkNyIUGoy6UHPV82/UcPIzhwc9cR1pch4CAq79QrjPLHYl49k1
                                mvwSLqr7vuNgn1ReihHix7dK5/zycVpI19mmA5Fe+u4rdGmRX5BgF+SLl60bo+FtgLLzx5Vk=
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="60%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">Sello Digital SAT</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                49a6umq2iGlL+UhbH+wEHVhxtcU1yNy5T0MpuXs7Ce3ERvhBKnUTXyU7NrPYg04PwYjIieW39BBGWi2ToSrnov3ZpfxSjddaeqg
                                zRkVEY1YUUbe/EQEcibAl2WpzU6bDw6njCs8gRsSq+TaMHV1Lxf1POeavW0l1CgYVD49GN2g=
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="60%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">Cadena original</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                ||1.0|5107A15C-37E9-4578-A5B2-E8BA16EAD42B|2013-11-19T19:32:33|mDUKZvB46pniNxwk1hNsc6FTnbbps5/yLZlx
                                QavCuphdmXz92pkNyIUGoy6UHPV82/UcPIzhwc9cR1pch4CAq79QrjPLHYl49k1mvwSLqr7vuNgn1ReihHix7dK5/zycVpI19mm
                                A5Fe+u4rdGmRX5BgF+SLl60bo+FtgLLzx5Vk=|20001000000100005761||
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="60%">
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                <font class="p_title">Enlace al certificado</font>
                            </div>
                            <div class="data_emitter_fiscal td_vertical_middle td_center">
                                http://solucionfactible.com/sfic/resources/files/csdSAT-SF/testing/20001000000100005761.zip
                            </div>
                        </td>
                    </tr>
                </table>
                <!-- CLOSE TABLE STRING FISCAL DATA -->
            </div>
        </td>
    </tr>
    <tr>
        <td width="100%" colspan=2>
            <div class="panel_border_radius_top panel_bg_color_title " style="text-align:center">
                Datos Bancarios COMPANY EMITTER Your MX Address
                <table class="table_column_border table_alter_color_row table_title_bg_color">
                    <tr>
                        <th>Banco / Moneda</td>
                        <th>N&uacute;mero de cuenta</td>
                        <th width="30%">Clave Interbancaria Estandarizada (CLABE)</td>
                        <th>Referencia</td>
                    </tr>
                    <tr>
                        <td class="center_td_data_bank_text">Reserve1 / MXN</td>
                        <td class="center_td_data_bank_text">7832823898989348934894</td>
                        <td class="center_td_data_bank_text"></td>
                        <td class="center_td_data_bank_text"></td>
                    </tr>
                    <tr>
                        <td class="center_td_data_bank_text">Reserve2 / MXN</td>
                        <td class="center_td_data_bank_text">7832823898989348934894</td>
                        <td class="center_td_data_bank_text"></td>
                        <td class="center_td_data_bank_text"></td>
                    </tr>
                    <tr>
                        <td class="center_td_data_bank_text">Reserve3 / MXN</td>
                        <td class="center_td_data_bank_text">7832823898989348934894</td>
                        <td class="center_td_data_bank_text"></td>
                        <td class="center_td_data_bank_text"></td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
