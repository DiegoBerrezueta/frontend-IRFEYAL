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
                                <h2 align="center">PLAN</h2>
                                <!-- Implementacion del Grid para el diseño del formulario -->
                                <!-- Implementacion del Enacabezado-->
                                <div class="row">
                                    <div class="col">
                                    </div>  
                                    <div class="col-sm-3">
                                        <input type="text" name="unidad" id="id_txtunidad" value="Unidad" class="form-control" style="text-align:center; font-size:25px; font-weight:bold; border-width:0;" disabled>
                                    </div>  
                                    <div class="col">
                                    </div>  
                                </div>
                                <!-- Implementacion del Cuerpo-->
                                <div class="row">
                                    <!-- Implementacion Parte 1 Seleccion de Asignatura y Unidad-->
                                    <div class="col-sm-2">
                                        <label for="lb_elegir_asig">Elegir Asignatura:</label>
                                        <select name="combo_asig" id="select_asig" class="form-select">
                                            <option value="1">Matematicas</option>
                                            <option value="2">Ciencias Naturales</option>
                                            <option value="3">Ciencias Sociales</option>
                                        </select>
                                        <br></br>
                                        <label for="lb_select_unidad">Elegir Unidad:</label>
                                        <select name="combo_unidad" id="select_unidad" class="form-select" onchange="obtenerSelectUnidad();" required>
                                            <option></option>
                                        </select>
                                    </div>
                                    <!-- Implementacion Parte 2 Todos los demas campos-->
                                    <div class="col-sm-9 container">
                                        <!-- Dentro de Parte 2, 3 columnas para datos principales-->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="lb_f_inicio">Fecha de inicio:</label>
                                                <input type="date" name="date" id="fechaIni" min="<?php echo date("(Y-m-d)");?>"  class="form-control" required><br>
                                                <label for="lb_asignatura">Asignatura:</label>
                                                <input type="text" name="asignatura" id="id_txtasignatura" value="Asignatura" class="form-control" style="text-align:center;" disabled>
                                            </div>  
                                            <div class="col-sm-4">
                                                <label for="lb_f_fin">Fecha de fin:</label>
                                                <input type="date" name="date" id="fechaFin" min="<?php echo date("(Y-m-d)");?>" class="form-control" required><br>
                                                <label for="lb_cod_asig">Codigo Asignatura:</label>
                                                <input type="text" name="codigoAsig" id="id_txtcodigoasig" value="Codigo Asignatura" class="form-control" style="text-align:center;" disabled>
                                            </div>
                                            <!-- Dentro de la columna 3, 2 columnas para (Curso y Paralelo)-->  
                                            <div class="col-sm-4">
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                    <label for="lb_curso">Curso:</label>
                                                    <select name="combo_curso" id="select_curso" class="form-select" style="text-align:center;" required>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                    </div>  
                                                    <div class="col-sm-5">
                                                    <label for="lb_paralelo">Paralelo:</label>
                                                    <select name="combo_paralelo" id="select_paralelo" class="form-select" style="text-align:center;" required>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                        <option>D</option>
                                                    </select>
                                                    </div>  
                                                </div>
                                                <br>
                                                <label for="lb_docente">Docente:</label>
                                                <input type="text" name="docente" id="id_txtdocente" value="Docente" class="form-control" style="text-align:center;" disabled>
                                            </div>  
                                        </div>
                                        <br>
                                        <!-- Dentro de Parte 2, 2 columanas (titulo y objetivos)-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lb_titulo">Titulo</label><br>
                                                    <textarea class="form-control" id="txt_titulo" rows="2" required></textarea>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lb_objetivos">Objetivos especificos de la unidad</label><br>
                                                    <textarea class="form-control" id="txt_objetivos" rows="2" required></textarea>
                                                </div>
                                            </div>  
                                        </div>
                                        <br>
                                        <!-- Dentro de Parte 2, 2 columanas (contenidos y criterio)-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lb_contenidos">Contenidos de la unidad</label><br>
                                                    <textarea class="form-control" id="txt_contenidos" rows="3" required></textarea>
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lb_criterios">Criterios de evaluacion</label><br>
                                                    <textarea class="form-control" id="txt_criterios" rows="3" required></textarea>
                                                </div>
                                            </div>  
                                        </div>
                                        <br>
                                        <!-- Dentro de Parte 2, 1 columana (Destrezas)-->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="lb_destrezas">Destrezas con criterio de desempeño</label>
                                                    <textarea class="form-control" id="txt_destrezas" rows="3" required></textarea>
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
<script src="../documentosacademicos/JSgenerar.js"></script>
