/* 
Trabajo con JQuey, arrow function Y Ajax para consumir la API REST
*/
var unidades = $("#select_unidad");
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
var tbody = $("#contenidoPersonas");
//se ejecuta al inicio de la plantilla-b
$(document).ready(function () {
    console.log("PRUEBA INICIO PLANTILLA pendientes")
});

/* Lo primero que ejecuta al cargar la pagina */
$(document).ready(() => {
    /* Envio la tabla a la funcion */
    cargarTabla(tabla_pendientes);
});
// La solicitud de servicios web menos el nombre de dominio
//var ruta = "http://localhost:8080/planunidades/p";
// La ruta completa al proxy PHP
//var url = "http://localhost:3000/pages/documentosacademicos/pendientes.php yws_path = '+ encodeURIComponent (http://localhost:8080/planunidades/p)";
// Código xmlhttp núcleo
//xmlhttp.open('GET', url, true);
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
                var tr = $("<tr></tr>").append(
                    /* item, toma el nombre de la columna de la BD; en este caso solo saco el id y el nombre*/
                    td(item.id_plan_unidad),
                    td(item.titulo_unidad),
                    td(item.fecha_inicio),
                    td(item.fecha_fin),
                    td(item.id_unidad),
                    td(item.estado)
                    /* ejm
                     td(item.cedula)
                     td(item.rol)
                     td(item.fechanacimiento)*/
                );
                /* cargo a la tabla la fila */
                tabla_pendientes.append(tr);
            });
            alert("En succes");
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

/* Funcion para filtrar el contenido de la tabla*/
$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tabla tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});