<?php include '../includes/header.php' ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-body">
                    <!--Titulo-->
                    <div class=container-fluid>
                        <strong>
                            <h9>PLANES DE UNIDAD PENDIENTES</h9>
                        </strong>
                    </div>
                    <!--Implementacion de la tabla de planes de unidad pendientes-->
                    <div class="container mt-3" id="tabla" style="background-color:gray;">
                        <h1>LISTA DE PLANES DE UNIDAD PENDIENTES</h1>
                        <p>Ingrese un dato a filtrar.</p>
                        <input class="form-control" id="myInput" type="text" placeholder="Search..">
                        <br>
                        <table class="table table-bordered" id="contenidoPendientes">
                            <thead>
                                <tr>
                                    <td scope="col">Id</td>
                                    <td scope="col">Titulo</td>
                                    <td scope="col">Fecha_Inicio</td>
                                    <td scope="col">Fecha_Fin</td>
                                    <td scope="col">No_Unidad</td>
                                    <td scope="col">Estado</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include '../includes/footer.php' ?>
<script src="../documentosacademicos/index.js"></script>