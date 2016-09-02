
$(function() {

    $('.delete').click(function(e) {
        var c = confirm("Geçerli Kaydı Silmek İstediğiniz Emin misiniz?");
        if (c == false) return false;
    });

    $('#table').dataTable({
        scrollY:        '50vh',
        scrollCollapse: true,
        paging:         false
    });

    $('[data-toggle="tooltip"]').tooltip();

    $('.t-sol').css('height',$('.t-sag').height())

});