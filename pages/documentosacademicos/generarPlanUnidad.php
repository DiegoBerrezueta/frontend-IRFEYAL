<?php include '../includes/header.php' ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-body">
                    <!-- Implementacion del formulario de registro -->
                    <div class=container-fluid>
                        <strong>
                            <h9>GENERAR PLAN DE UNIDAD</h9>
                        </strong>
                    </div>
                    <form action="registrar.php" method="post" id="form" enctype="multipart/form-data">
                        <div class="container-fluid border border-dark bg-light">
                            <div class="container-fluid">
                                <h2 align="center">Plan de unidad</h2>
                                <!-- Implementacion del Grid para el diseño del formulario -->
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="lb_elegir_asig">Elegir Asignatura:</label>
                                        <select name="combo_asig" id="select_asig" class="form-select">
                                            <option value="1">Matematicas</option>
                                            <option value="2">Ciencias Naturales</option>
                                            <option value="3">Ciencias Sociales</option>
                                        </select>
                                        <br></br>
                                        <label for="lb_unidad">Elegir Unidad:</label>
                                        <select name="combo_unidad" id="select_unidad" class="form-select">
                                            <option value="1">selec</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-9 container">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="lb_f_inicio">Fecha de inicio:</label>
                                                <input type="date" name="date" id="fechaIni" min="<?php echo date("(Y-m-d)");?>"  class="form-control" ><br>
                                                <label for="lb_asignatura">Asignatura:</label>
                                        </div>  
                                            <div class="col-sm-4">
                                                <label for="lb_f_fin">Fecha de fin:</label>
                                                <input type="date" name="date" id="fechaFin" min="<?php echo date("(Y-m-d)");?>" class="form-control" ><br>
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
                                                    <textarea class="form-control" id="txt_titulo" rows="2"></textarea>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lb_objetivos">Objetivos especificos de la unidad</label><br>
                                                    <textarea class="form-control" id="txt_objetivos" rows="2"></textarea>
                                                </div>
                                            </div>  
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lb_contenidos">Contenidos de la unidad</label><br>
                                                    <textarea class="form-control" id="txt_contenidos" rows="3"></textarea>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lb_criterios">Criterios de evaluacion</label><br>
                                                    <textarea class="form-control" id="txt_criterios" rows="3"></textarea>
                                                </div>
                                            </div>  
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="lb_destrezas">Destrezas con criterio de desempeño</label>
                                                    <textarea class="form-control" id="txt_destrezas" rows="3"></textarea>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div align="center">
                                    <input type="submit" onclick="generar_plan()" class="boton btn-success btn-lg" value="Enviar">
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
