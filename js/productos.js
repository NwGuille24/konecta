$(document).ready(function () {
    load(1);

});

function load(page) {
    var q = $("#q").val();
    $("#loader").fadeIn('slow');
    $.ajax({
        url: './ajax/listar_productos.php?action=ajax&page=' + page + '&q=' + q,
        beforeSend: function (objeto) {
            $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
        },
        success: function (data) {
            $(".outer_div").html(data).fadeIn('slow');
            $('#loader').html('');
            $('[data-toggle="tooltip"]').tooltip({ html: true });

        }
    })
}


function venta(id, cantidad, nombre) {

    $('#venta').modal('show');
    $('#id_pv').val(id);
    $('#nombre_pv').val(nombre);

    $('#cantidad_pv').val(cantidad);
};



function editar(id, nombre, ref, precio, peso, categoria, cantidad,) {

    $('#editar').modal('show');
    $('#id_p').val(id);
    $('#nombre_p').val(nombre);
    $('#detalle_p').val(ref);
    $('#precio_p').val(precio);
    $('#peso_p').val(peso);
    $('#categoria_p').val(categoria);
    $('#cantidad_p').val(cantidad);
};



function eliminar(id) {
    if (confirm('Seguro desea Eliminar?')) {
        $.ajax({
            type: "POST",
            url: "./ajax/eliminar_produc.php",
            data: {
                "id": id,
            },
            success: function (datos) {
                location.reload();
            }
        })
    }
};