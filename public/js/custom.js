$(function() {

    $('.delete').click(function(e) {
        var c = confirm("Geçerli Kaydı Silmek İstediğiniz Emin misiniz?");
        if (c == false) return false;
    });

    $('#table').dataTable();

});