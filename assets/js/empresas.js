$(document).ready(function() {

    document.getElementById('cnpj').addEventListener('input', function(e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2})/);
        e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + '.' + x[3] + '/' + x[4] + (x[5] ? '-' + x[5] : '');
    });

    $('.btn-danger').on('click', function() {
        var id = $(this).data("id");
        $.ajax({
            type: "POST",
            url: '/empresas/ajax_delete/',
            data: { id: id },
            success: function(retorno) {
                var response = JSON.parse(retorno);
                alert(response['message']);
                window.location.href = response['url'];
            },
            error: function(xhr, textStatus, errorThrown) {
                alert('Ocorreu um erro, por favor tente novamente!');
            }
        });
    });

    $('#btn_save').on('click', function() {
        console.log($('#form_add').serialize());
        $.ajax({
            type: "POST",
            url: '/empresas/ajax_save/',
            data: $('#form_add').serialize(),
            success: function(retorno) {
                var response = JSON.parse(retorno);
                console.log(response['message']);
                alert(response['message']);
                window.location.href = response['url'];
            },
            error: function(xhr, textStatus, errorThrown) {
                alert('Ocorreu um erro, por favor tente novamente!');
            }
        });
    });

    $('#btn_update').on('click', function() {
        $.ajax({
            type: "POST",
            url: '/empresas/ajax_update/',
            data: $('#form_update').serialize(),
            success: function(retorno) {
                var response = JSON.parse(retorno);
                console.log(response['message']);
                alert(response['message']);
                window.location.href = response['url'];
            },
            error: function(xhr, textStatus, errorThrown) {
                alert('Ocorreu um erro, por favor tente novamente!');
            }
        });
    });
});