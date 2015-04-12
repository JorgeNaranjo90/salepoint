{!! Form::open(['route'=>['partners.show',':USER_ID'],'method'=>'GET', 'id' => 'partner_show']) !!}
{!! Form::close() !!}

{!! Form::open(['route'=>['products.searchCode',':PRODUCT'],'method'=>'PUT', 'id' => 'product_show']) !!}
{!! Form::close() !!}
<script>

    /****
    *
    * This function onchange data of partner
    *
    ****/
    $(function() {
        $('#partnerinput').on('input',function(e) {
            e.preventDefault();

            var opt = $('option[value="'+$(this).val()+'"]');
            var id = opt.length ? opt.data('id') : null;
            document.getElementById("partner_id").value = id;

            var form = $('#partner_show');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();

            $.get(url, data , function(resJson){
                var result = JSON.parse(resJson);
                document.getElementById("lblPartnerRfc").innerHTML = result ? '<b>RFC: </b>'+result.rfc : '';
                var address = result ? result.street+', ' : '';
                address += result ? result.noExt+', ' : '';
                address += result ? result.noInt+'' : '';
                address += '</br>';
                address += result ? result.colony+', ' : '';
                address += result ? result.zip+', ' : '';
                address += result ? result.locality+'' : '';
                address += '</br>';
                address += result ? result.city_name+', ' : '';
                address += result ? result.state_name+', ' : '';
                address += result ? result.country_name+'' : '';
                document.getElementById("lblPartnerAddress").innerHTML = address;
            });
        });
    });                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                


    $(function(){
        $('#code_product').keypress(function(event) {
            if (event.which == 13 || event.keyCode == 13) {
                event.preventDefault();
                document.getElementById('code_product_sol').value = null;
                document.getElementById('price_sale_unit_sol').value = null;
                document.getElementById('unit_product_sol').value = null;
                document.getElementById('name_product_sol').value = null;
                document.getElementById('id_product_sol').value = null;
                document.getElementById('qty_product_sol').value = null;
                document.getElementById("image_product_sol").src = null;
                document.getElementById('qtyAvailable_sol').value = null;
                document.getElementById('product_partner_id').value = null;
                document.getElementById("qty_product_sol").focus();

                var productCode = $('#code_product').val();
                var form = $('#product_show');
                var url = form.attr('action').replace(':PRODUCT', productCode);
                var data = form.serialize();
                $.get(url, data, function(resJson){
                    var result = JSON.parse(resJson);
                    if(parseInt($('#partner_id').val()) != parseInt(result[0].partner_id)) {
                        error = "Este producto no es de proveedor seleccionado";
                        message_saleorder_error.innerHTML = error;
                        $('#lost_product').modal({
                            show: 'false'
                        });
                        $('#load_product_table').modal('hide');

                    }else{
                        document.getElementById('code_product_sol').value = result[0].ean13;
                        document.getElementById('price_sale_unit_sol').value = result[0].salePrice;
                        document.getElementById('unit_product_sol').value = result[0].umo_name;
                        document.getElementById('name_product_sol').value = result[0].name;
                        document.getElementById('id_product_sol').value = result[0].id;
                        document.getElementById('qty_product_sol').value = null;
                        document.getElementById('qtyAvailable_sol').value = result[0].qtyAvailable;
                        document.getElementById('product_partner_id').value = result[0].partner_id;
                        document.getElementById("image_product_sol").src = "data:image/png;base64,"+result[0].image;
                        $('#load_product_table').modal({
                            show: 'false'
                        });
                    }
                });

            }
            return true;
        });
    });

    /*
    *
    * Functions table add and eliminate
    *
    * */

    var count = "1";

    function createRow()
    {
        var error = "";
        message_saleorder_error.innerHTML =null;

        if(parseFloat($('#qty_product_sol').val()) <= 0) {
            error = "La cantidad debe ser mayor a 0";
            message_saleorder_error.innerHTML = error;
            $('#lost_product').modal({
                show: 'false'
            });

        }else{

            var tbody = document.getElementById('sale_order_lines').getElementsByTagName("tbody")[0];
            // create row
            var row = document.createElement("TR");
            /*
            * Name inpust       sale_order_line_name[]
            * Name inpust       sale_order_line_qty[]
            * Name inpust       sale_order_line_unitPrice[]
            * Name inpust       sale_order_line_subtotal[]
            * Name inpust       sale_order_line_product_id[]
            *
            *   sale_order_id   is set when this record is store in table
            *
            *   This function and delete only no functionality with firefox
            * */
            //Name of product
            var td1 = document.createElement("TD");
            var strHtmlname = "<INPUT TYPE=\"text\" NAME=\"sale_order_line_name[]\" min=\"1\" max=\"9999\" value=\""+$('#name_product_sol').val()+"\" readonly>" ;
            td1.innerHTML = strHtmlname.replace(/!count!/g,count);

            //Code of product
            var td2 = document.createElement("TD");
            var strHtmlcode = $('#code_product_sol').val()+"<INPUT TYPE=\"hidden\" NAME=\"sale_order_line_product_id[]\" value=\""+$('#id_product_sol').val()+"\">";
            td2.innerHTML = strHtmlcode.replace(/!count!/g,count);

            var td3 = document.createElement("TD");
            var strHtmlqty = "<INPUT TYPE=\"number\" NAME=\"sale_order_line_qty[]\" min=\"1\" max=\"9999\" value=\""+$('#qty_product_sol').val()+"\" readonly>";
            td3.innerHTML = strHtmlqty.replace(/!count!/g,count);

            var td4 = document.createElement("TD");
            var strHtmlunitPrice = "<INPUT TYPE=\"number\" NAME=\"sale_order_line_unitPrice[]\" value=\""+$('#price_sale_unit_sol').val()+"\" readonly>";
            td4.innerHTML = strHtmlunitPrice.replace(/!count!/g,count);

            var subtotal_sol_current = parseFloat($('#subtotal').val());
            var total_sol_current = parseFloat($('#total').val());

            //Agregamos la validacion si cuenta con mas de 50 productos
            // disponibles se realizara un 10% del valor de cada producto

            var total_line_withoutDiscount = ($('#qty_product_sol').val() * $('#price_sale_unit_sol').val());

            var sub_sub_total = subtotal_sol_current+ total_line_withoutDiscount;
            document.getElementById('subtotal').value = sub_sub_total;
            document.getElementById('total').value = sub_sub_total;


            var td5 = document.createElement("TD");
            var strHtmlsubtotal = "<INPUT TYPE=\"number\" NAME=\"sale_order_line_subtotal[]\" value=\""+total_line_withoutDiscount+"\" readonly>";
            td5.innerHTML = strHtmlsubtotal.replace(/!count!/g,count);

            var td6 = document.createElement("TD");
            var strHtml5 = "<a onClick=\"delRow()\"><i class=\"fa fa-trash fa-2x\"></i></a>";
            td6.innerHTML = strHtml5.replace(/!count!/g,count);

            // append data to row
            row.appendChild(td1);
            row.appendChild(td2);
            row.appendChild(td3);
            row.appendChild(td4);
            row.appendChild(td5);
            row.appendChild(td6);
            // add to count variable
            count = parseInt(count) + 1;
            // append row to table
            tbody.appendChild(row);


            $('#load_product_table').modal('hide');
        }
        document.getElementById('code_product').value = null;

    }

    function delRow()
    {
        var current = window.event.srcElement;
        //here we will delete the line
        alert(current[0].val());
        while ( (current = current.parentElement)  && current.tagName !="TR");
        current.parentElement.removeChild(current);
    }

 </script>
