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
                    <div class="container mt-3 border border-dark bg-light" id="tabla">
                        <h6>LISTA DE PLANES DE UNIDAD PENDIENTES</h6>
                        <p>Ingrese un dato a filtrar.</p>
                        <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
                        <br>
                        <table class="table table-bordered table-hover table-responsive" id="contenidoPendientes">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Fecha_Inicio</th>
                                    <th scope="col">Fecha_Fin</th>
                                    <th scope="col">No_Unidad</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>artes</td>
                                    <td>01/02/2022</td>
                                    <td>01/03/2022</td>
                                    <td>Unidad 1</td>
                                    <td>Pendiente</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ciencias</td>
                                    <td>01/03/2022</td>
                                    <td>01/04/2022</td>
                                    <td>Unidad 1</td>
                                    <td>Aprobado</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sociales</td>
                                    <td>01/04/2022</td>
                                    <td>01/05/2022</td>
                                    <td>Unidad 2</td>
                                    <td>Rechazado</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <br>

                    <div class=container-fluid>
                        <strong>
                            <h9>REVICION DE PLAN DE UNIDAD</h9>
                        </strong>
                    </div>
                    <form id="form" enctype="multipart/form-data">
                        <div class="container-fluid border border-dark bg-light">
                            <div class="container-fluid">
                                <h2 align="center">Plan de unidad</h2>
                                <!-- Implementacion del Grid para el diseño del formulario -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="lb_f_inicio">Fecha de inicio:</label>
                                        <input type="date" name="date" id="fechaIni" min="<?php echo date("(Y-m-d)");?>"  class="form-control" disabled><br>
                                        <label for="lb_asignatura">Asignatura:</label>
                                </div>  
                                    <div class="col-sm-4">
                                        <label for="lb_f_fin">Fecha de fin:</label>
                                        <input type="date" name="date" id="fechaFin" min="<?php echo date("(Y-m-d)");?>" class="form-control" disabled><br>
                                        <label for="lb_cod_asig">Codigo Asignatura:</label>
                                    </div>  
                                    <div class="col-sm-4">
                                        <label for="lb_curso">Curso:</label><br>
                                        <label for="lb_docente">Docente:</label>
                                        <label class="form-label" id="lbunidad">Unidad</label>
                                    </div>  
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lb_titulo">Titulo</label><br>
                                            <textarea class="form-control" id="txt_titulo" rows="2" disabled></textarea>
                                        </div>
                                    </div>  
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lb_objetivos">Objetivos especificos de la unidad</label><br>
                                            <textarea class="form-control" id="txt_objetivos" rows="2" disabled></textarea>
                                        </div>
                                    </div>  
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lb_contenidos">Contenidos de la unidad</label><br>
                                            <textarea class="form-control" id="txt_contenidos" rows="3" disabled></textarea>
                                        </div>
                                    </div>  
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lb_criterios">Criterios de evaluacion</label><br>
                                            <textarea class="form-control" id="txt_criterios" rows="3" disabled></textarea>
                                        </div>
                                    </div>  
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="lb_destrezas">Destrezas con criterio de desempeño</label>
                                            <textarea class="form-control" id="txt_destrezas" rows="3" disabled></textarea>
                                        </div>
                                    </div>  
                                </div>
                                <br>
                                <div align="center">
                                    <input type="button" onclick="aprobar_plan()" class="btn btn-success btn-lg" value="Aprobar">
                                    <input type="button" onclick="rechazar_plan()" class="btn btn-danger btn-lg" value="Rechazar">
                                </div>
                            </div>
                            <br>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php include '../includes/footer.php' ?>
<script src="../documentosacademicos/index.js"></script>