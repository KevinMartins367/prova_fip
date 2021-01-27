$(document).ready(function() {


    $('.btn-danger').on('click', function() {
        var id = $(this).data("id");
        $.ajax({
            type: "POST",
            url: '/usuarios/ajax_delete/',
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
            url: '/usuarios/ajax_save/',
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
            url: '/usuarios/ajax_update/',
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