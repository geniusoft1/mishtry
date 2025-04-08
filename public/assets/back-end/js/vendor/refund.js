"use strict";

$(document).ready(function () {

    $('#approved').hide();
    $("#approved_note").prop("required", false);
    $('#rejected').hide();
    $("#rejected_note").prop("required", false);
});

$("#refund_status_change").on('change', function () {
    let value = $(this).val();
    if (value === 'approved') {
        $('#rejected').hide();
        $("#rejected_note").prop("required", false);

        $('#approved').show();
        $("#approved_note").prop("required", true);

    } else if (value === 'rejected') {
        $('#approved').hide();
        $("#approved_note").prop("required", false);

        $('#rejected').show();
        $("#rejected_note").prop("required", true);

    } else {
        $('#approved').hide();
        $("#approved_note").prop("required", false);
        $('#rejected').hide();
        $("#rejected_note").prop("required", false);

    }
});
<<<<<<< HEAD

$('.close-alert-message').on('click',function (){
    $('.alert--message').addClass('d-none');
})
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
