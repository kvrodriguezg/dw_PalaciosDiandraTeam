<?php require_once("../Controllers/examenesController.php"); ?>
<?php include "../Views/Shared/head.php" ?>
<script src="../../js/diagnostico.js"></script>
<?php include "menudiagnostico.php" ?>


<body>
    <div style="height: 70px"></div><br><br>
    <h1 class="display-2 text-center">Diagnósticos</h1><br><br>
    <section>
        <table id="tableUsers" class="tabla table">
            <thead>
                <tr>
                    <th>Seleccionar</th>
                    <th>Nombre Paciente</th>
                    <th>Domicilio</th>
                    <th>Laboratorio</th>
                    <th>Examen</th>
                    <th>F. Toma de Muestra</th>
                    <th>F. de Tinción</th>
                    <th>F. Diagnóstico</th>
                    <th>Diagnóstico</th>
                    <th>Cod. Diagnóstico</th>
                    <th>Estado</th>
                    <th>Cambiar Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($examenesDiagnostico)) { ?>
                    <tr class="table table-striped">
                        <form method="post" action="diagnostico.php">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                    </label>
                                </div>
                            </td>
                            <td><?php echo $examen->obtenerNombrePaciente($row['RutPaciente']) ?></td>
                            <td><?php echo $examen->obtenerDomicilioPaciente($row['RutPaciente']) ?></td>
                            <td><?php echo $examen->obtenerCentroMedico($row['IDCentroSolicitante']) ?></td>
                            <td><?php echo $row['NombreExamen'] ?></td>
                            <td><?php echo $row['FechaTomaMuestra'] ?></td>
                            <td><?php echo $row['Fechatincion'] ?></td>
                            <td><?php echo $row['Fechadiagnostico'] ?></td>
                            <td><?php echo $examen->obtenerDiagnostico($row['CodigoDiagnosticos']); ?></td>
                            <td>
                                <select class="form-select" style="width: 150px" name="diagnostico" required>
                                    <?php
                                    $diagnosticos = $examen->obtenerListaDiagnosticos();

                                    while ($row1 = mysqli_fetch_array($diagnosticos)) {
                                        echo '<option value="' . $row1['Codigo'] . '">' . $row1['descripcion'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                            <td><?php echo $examen->obtenerEstadoActual($row['IDEstado']); ?></td>

                            <td>
                                <select class="form-select" style="width: 150px" name="estado" required>
                                    <?php
                                    $resultadoEstados = $examen->obtenerEstados('diagnostico');

                                    while ($row1 = mysqli_fetch_array($resultadoEstados)) {
                                        echo '<option value="' . $row1['IDEstado'] . '">' . $row1['NombreEstado'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                            <td>
                                <!-- <a href="generar_pdf.php" class="btn w-100 m-1 btn-danger" >Ver PDF</a>  -->
                                <input type="hidden" name="idExamen" value=<?php echo $row['IDExamen'] ?>>
                                <input name="actualizarEstadoDiagnostico" type="submit" class="btn w-100 m-1 btn-success"></input>
                            </td>
                        </form>
                    </tr>

            </tbody>

        <?php } ?>
        </table>
    </section>
</body>
<?php include "../views/Shared/scripts.php" ?>

</html>