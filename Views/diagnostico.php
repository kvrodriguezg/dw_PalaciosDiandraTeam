<?php include "../Views/Shared/head.php" ?>
<script src="../../js/diagnostico.js"></script>

    <?php include "menudiagnostico.php" ?>
    
<body class="container">
    <div style="height: 70px"></div><br><br>
    <h1 class="display-2 text-center">Diagnósticos</h1><br><br>
    <section style="margin: 10px;">
        <style>
            .tabla {
                width: 100%;
            }
        </style>
        <table id="tablaDiagnostico" class="text-center tabla table">
            <thead>
                <tr>
                <th>Seleccionar</th>
                    <th>Nombre Paciente</th>
                    <th>Rut</th>
                    <th>Domicilio</th>
                    <th>Nombre Laboratorio</th>
                    <th>Nombre Examen</th>
                    <th>Fecha de toma de muestra</th>
                    <th>Estado</th>
                    <th>Diagnostico</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table table-striped">
                <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                            </label>
                        </div>
                    </td>
                    <td>Luis Yañez</td>
                    <td>17426433-5</td>
                    <td>Arturo prat 269</td>
                    <td>INDISA</td>
                    <td>Glisemia</td>
                    <td>12-12-2024</td>
                    <td>Listo para Diagnostico</td>
                    <form>
                        <td>
                            <select class="form-select" style="width: 62px" aria-label="Default select example" id="estado" name="estado">
                                <option value="Z">- POR DIAGNOSTICAR</option>
                                <option value="A">A - NEGATIVO</option>
                                <option value="B">B - MUESTRA INADECUADA, <br>VOLVER A TOMAR</option>
                                <option value="C">C - MUESTRA PRESENTA INFECCION</option>
                                <option value="D">D - POSIBLE ADENOCARCINOMA</option>
                                <option value="E">E - CANCER EPIDERMOIDE</option>
                                <option value="F">F - MUESTRA ATROFICA</option>
                            </select>
                        </td>
                        <td>
                            <input type="hidden" name="enviarRegistro" value="enviado">
                            <button type="submit" id="btnEnviar" class="btn btn-success">Enviar a Registro</button>
                    </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
</body>
<?php include "../views/Shared/scripts.php" ?>
</html>