
$(function() {

    $('.delete').click(function() {
        var c = confirm("Geçerli Kaydı Silmek İstediğiniz Emin misiniz?");
        if (c == false) return false;
    });

    $('#table').dataTable({
        scrollY:        '50vh',
        scrollCollapse: true,
        paging:         true
    });

    $('[data-toggle="tooltip"]').tooltip();

    $('.t-sol').css('height',$('.t-sag').height());

    $('#personlist ul li').click(function () {
        var email = $(this).data('email');
        $('#txtalici').val(email)
    });
    var coverflow = $("#coverflow").flipster();
});