{!! Form::open(['route'=>['partners.show',':USER_ID'],'method'=>'GET', 'id' => 'partner_show']) !!}
{!! Form::close() !!}

{!! Form::open(['route'=>['products.show',':PRODUCT'],'method'=>'GET', 'id' => 'product_show']) !!}
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
                $('#load_product_table').modal({
                    show: 'false'
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

    function createRow()
    {
        var row = document.createElement('tr'); // find row to copy
        var name = document.createElement('td'); // create column node
        var code = document.createElement('td'); // create second column node
        var qty = document.createElement('td'); // create second column node
        var unitPrice = document.createElement('td'); // create second column node
        var total = document.createElement('td'); // create second column node
        row.appendChild(name); // append first column to row
        row.appendChild(code); // append second column to row
        row.appendChild(qty); // append second column to row
        row.appendChild(unitPrice); // append second column to row
        row.appendChild(total); // append second column to row
        name.innerHTML = "Coca cola 600"; // put data in first column
        code.innerHTML = "1234567"; // put data in second column
        qty.innerHTML = 12; // put data in second column
        unitPrice.innerHTML = 20; // put data in second column
        total.innerHTML = 12 * 20; // put data in second column
        var table = document.getElementById("tableToModify"); // find table to append to
        table.appendChild(row); // add new row to end of table

        $('#load_product_table').modal('hide');
    }

    function deleteRow(btn) {
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }

 </script>