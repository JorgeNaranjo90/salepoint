<div class="container">
   <div class="row">
       <div class="form-group col-lg-4">
                   {!! Form::label('partner_id', 'Customer', ['class' => 'control-label']) !!}
                   <input id="partnerinput" list="partner_list" class="form-control requiered_field"/>
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
           {!! Form::label('sale_datetime', 'Date', ['class' => 'control-label']) !!}
           <?php date_default_timezone_set('America/Mexico_City') ?>
           <input type="datetime" name="sale_datetime" id="sale_datetime" value="{{ date('d/m/Y H:i:s') }}" class="form-control requiered_field"/>
       </div>
   </div>
    <div class="row">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#order_lines" data-toggle="tab">Order Lines</a></li>
            <li><a href="#other_info" data-toggle="tab">Other Info</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="order_lines">
               <div class="row">
                   <div class="form-group col-lg-6">
                       Code product <input name="code_product" id="code_product" class="form-control"/>
                   </div>
                   <table id="sale_order_lines" class="table table-striped table-hover">
                       <thead>
                           <tr>
                               <th>Name</th>
                               <th>Code</th>
                               <th>Qty</th>
                               <th>Unit Price</th>
                               <th>Total</th>
                               <th></th>
                           </tr>
                       </thead>
                       <tbody id="tableToModify"></tbody>
                   </table>
               </div>
            </div>
            <div class="tab-pane" id="other_info">
                {!! Form::label('notes', 'Notes')!!}
                {!! Form::textarea('notes',null,['class'=>'form-control '])  !!}
            </div>
        </div>
    </div>
</div>


@section('messages')
    <div class="modal fade" id="load_product_table" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="panel-title" style="font-family:\'Lobster\',cursive;font-weight:500;line-height:1.1;">Sale Order Line</h2>
                        </div>
                    </div>
                    <form action="JavaScript:createRow()">
                        <div class="form-group col-lg-6">
                            <input type="text" name="code_product_sol" id="code_product_sol" readonly class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" name="unit_product_sol" id="code_product_sol" readonly class="form-control">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" name="name_product_sol" id="code_product_sol" readonly class="form-control">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="number" name="qty_product_sol" id="code_product_sol" class="form-control requiered_field" required>
                        </div>
                        <input type="hidden" name="id_product_sol" id="code_product_sol" readonly>
                        <button type="submit" class="btn btn-info">Save</button>
                    </form>
                    <a type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</a>
                </div>
            </div>
        </div>
    </div>
@endsection