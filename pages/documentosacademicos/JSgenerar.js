
var select_unidades = $("#select_unidad");

$(document).ready(() => {
    /* Envio el select a la funcion */
    cargarSelect(select_unidades);
});

function cargarSelect(select_unidades) {
    $.ajax({
        /* GET para traer informacion de la BD */
        type: "GET",
        /* Link que publico desde el Backend */
        url: "http://localhost:8080/unidades/",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        /* En caso de que funcione entra aqui */
        success: function (data) {
            /* Limpio el select */
            select_unidades.html("");
            /* recorro */
            $.each(data, function (i, item) {
                /* cargo la info en option del select */
                var option = $("<option></option>").append(
                    /* item, toma el nombre de la columna de la BD; en este caso solo saco el nombre de la unidad*/
                    item.nombre_unidad
                );
                /* cargo al select la option*/
                select_unidades.append(option);
            });
        },
        /* En caso de error entra aqui */
        error: function (data) {
            alert("error");
        },
    });
}