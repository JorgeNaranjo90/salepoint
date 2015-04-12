<div class="container">
    {!! Form::open(['route'=>'purchases.store','method'=>'POST','files'=>true]) !!}
   <div class="row">
       <div class="form-group col-lg-4">
                   {!! Form::label('partner_id', 'Proveedor', ['class' => 'control-label']) !!}
                   <input id="partnerinput" list="partner_list" class="form-control requiered_field" required/>
                   <datalist id="partner_list">
                       @foreach($customers as $customer)
                           <option data-id="{{ $customer->id }}" value="{{ $customer->name.' '.$customer->lastName }}"/>
                       @endforeach
                   </datalist>
                   <input type="hidden" name="partner_id" id="partner_id"/>
                   <p id="lblPartnerRfc"/>
                   <p id="lblPartnerAddress"/>
       </div>
       <div class="form-group col-lg-2">
           {!! Form::label('sale_datetime', 'Fecha', ['class' => 'control-label']) !!}
           <?php date_default_timezone_set('America/Mexico_City') ?>
           <input type="datetime" name="sale_datetime" id="sale_datetime" value="{{ date('d/m/Y H:i:s') }}" class="form-control requiered_field" required/>
       </div>
   </div>
    <div class="row">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#order_lines" data-toggle="tab">Detalles de la compra</a></li>
            <li><a href="#other_info" data-toggle="tab">Otra Información</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="order_lines">
               <div class="row">
                   <div class="form-group col-lg-6 has-success">
                       <input name="code_product" id="code_product" class="form-control" placeholder="Ingresa el código ean13 del producto"/>
                   </div>
                </div>
                   <div class="table-responsive">
                       <table id="sale_order_lines" class="table table-striped table-hover">
                           <thead>
                               <tr>
                                   <th width="35%">Nombre</th>
                                   <th width="15%">Código</th>
                                   <th width="12%">Cantidad</th>
                                   <th width="12%">Precio Unitario</th>
                                   <th width="12%">Total</th>
                                   <th width="2%"></th>
                               </tr>
                           </thead>
                           <tbody id="tableToModify"></tbody>
                           <tfoot>
                                <tr>
                                    <td colspan="4"></td>
                                    <td>SubTotal $</td>
                                    <td><input id="subtotal" name="subtotal" value="0.0" readonly/></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="4"></td>
                                    <td>TOTAL $</td>
                                    <td><input id="total" name="total" value="0.0" readonly/></td>
                                    <td></td>
                                </tr>
                           </tfoot>
                       </table>
                   </div>
            </div>
            <div class="tab-pane" id="other_info">
                {!! Form::label('notes', 'Notas')!!}
                {!! Form::textarea('notes',null,['class'=>'form-control '])  !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2">
            <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i> Guardar</button>
        </div>
    </div>
    <input type="hidden" id="real_total" name="real_total"/>
    {!! Form::close() !!}
</div>


@section('messages')
    <div class="modal fade" id="load_product_table" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-title" style="font-family:\'Lobster\',cursive;font-weight:500;line-height:1.1;">Producto</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-lg-3">
                            <img src="" width="120px" height="180px" id="image_product_sol" name="image_product_sol"/>
                        </div>
                        <div class="col-lg-9 text-left">
                            <form action="JavaScript:createRow()">
                                <div class="form-group col-lg-12">
                                    {!! Form::label('qty_product_sol', 'Cantidad')!!}
                                    <input type="number" name="qty_product_sol" id="qty_product_sol" class="form-control requiered_field" required autofocus>
                                </div>
                                <div class="form-group col-lg-12">
                                    {!! Form::label('name_product_sol', 'Nombre')!!}
                                    <input type="text" name="name_product_sol" id="name_product_sol" readonly class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    {!! Form::label('code_product_sol', 'Ean13')!!}
                                    <input type="text" name="code_product_sol" id="code_product_sol" readonly class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    {!! Form::label('price_sale_unit_sol', 'Precio')!!}
                                    <input type="text" name="price_sale_unit_sol" id="price_sale_unit_sol" readonly class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    {!! Form::label('unit_product_sol', 'Unidad')!!}
                                    <input type="text" name="unit_product_sol" id="unit_product_sol" readonly class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    {!! Form::label('qtyAvailable', 'Cantidad disponible')!!}
                                    <input type="text" name="qtyAvailable_sol" id="qtyAvailable_sol" readonly class="form-control">
                                </div>

                                <input type="hidden" name="id_product_sol" id="id_product_sol" >
                                <input type="hidden" name="product_partner_id" id="product_partner_id" >
                                <button type="submit" class="btn btn-info">Agregar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="lost_product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h2 class="panel-title" style="font-family:\'Lobster\',cursive;font-weight:500;line-height:1.1;">Precaución</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <p id="message_saleorder_error"/>
                        <button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection