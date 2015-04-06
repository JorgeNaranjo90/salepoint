/**
 * Created by taxque on 5/04/15.
 */
jQuery(document).ready(function ($) {
    $('#tabs').tab();
});


$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
});
