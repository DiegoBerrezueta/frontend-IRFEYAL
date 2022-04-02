/* 
Trabajo con JQuey, arrow function Y Ajax para consumir la API REST
*/
/* Atrapo los campos de texto del front */
var unidad = $("#lbunidad");
var nombre = $("#nombre");
var tarea = $("#exampleTextarea");
/* Atrapo los botones */
var guardar = $("#guardar");
var actualizar = $("#actualizar");
var buscar = $("#buscar");
var eliminar = $("#eliminar");
/* Atrapo las Tablas */
var tabla_pendientes = $("#contenidoPendientes");
var tabla_aprobados = $("#contenidoAprobados");
var tabla_rechazados = $("#contenidoRechazados");


/* Lo primero que ejecuta al cargar la pagina */
$(document).ready(() => {
    /* Envio la tabla a la funcion */
    cargarTabla(tabla_pendientes);
});


function cargarTabla(tabla_pendientes) {
    $.ajax({
        /* GET para traer informacion de la BD */
        type: "GET",
        /* Link que publico desde el Backend */
        url: "http://localhost:8080/planunidades/p",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        /* En caso de que funcione entra aqui */
        success: function (data) {
            /* Limpio la tabla */
            tabla_pendientes.html("");
            /* recorro */
            $.each(data, function (i, item) {
                /* cargo la info en tr */
                var boton = $("<button type='button' class='btn btn-primary'></button>").append("Abrir");
                var tr = $("<tr></tr>").append(
                    /* item, toma el nombre de la columna de la BD*/
                    td(item.id),
                    td(item.titulo_unidad),
                    td(item.fecha_inicio),
                    td(item.fecha_fin),
                    td(item.unidad.id),
                    td(item.estado),
                    tdb()
                );
                /* cargo a la tabla la fila */
                tabla_pendientes.append(tr);
            });
        },
        /* En caso de error entra aqui */
        error: function (data) {
            alert("error");
        },
    });
}
/* FUNCION QUE USO SIMPRE PARA TRABAJAR CON TABLAS */
var td = function (texto) {
    return $("<td></td>").text(texto);
};
var tdb = function () {
    return $("<button type='button' class='btn btn-primary' onclick='cargar_plan()'></button>").append("Abrir");
}

function cargar_plan() {
    alert("Cargando plan");
}

/* Funcion para filtrar el contenido de la tabla*/
$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tabla tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});