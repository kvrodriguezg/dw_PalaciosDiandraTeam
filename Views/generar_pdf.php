<?php
// Incluir la biblioteca TCPDF
require_once('../TCPDF-main/tcpdf.php');

// Crear una instancia de TCPDF
$pdf = new TCPDF();

// Agregar una nueva página al PDF
$pdf->AddPage();

// Definir el contenido del PDF
$logoPath = '../img/logo_labmuest.png';  // Ruta a tu logo
$fechaImpresion = date('Y-m-d H:i:s');  // Fecha de impresión actual

// Aquí deberías obtener los datos del paciente y el diagnóstico desde la base de datos
$nombrePaciente = "Luis Yañez";
$rutPaciente = "11111111-1";
$descripcionDiagnostico = "Descripción del Diagnóstico desde la base de datos";
$fechaTomaMuestra = "17-11-12023";
$fechaRecepcionExamen = "18-11-2023";
$fechaTincion = "19-11-2023";
$fechaDiagnostico = "21-11-2023";
$Diagnostico ="Diagnóstico del Examen";

// Configurar el contenido del PDF



$html = '

    <table width="100%">
        <tr><br>
            <td><img src="'.$logoPath.'" width="80"></td>
            <td align="right">
                <strong>Nombre del Paciente:</strong> '.$nombrePaciente.'<br>
                <strong>RUT del Paciente:</strong> '.$rutPaciente.'
            </td>
        </tr>
        <br>
        <br>
        <tr>
            <td colspan="2" align="center"><h2>Informe de Diagnóstico</h2></td>
        </tr>

       <br>
        <tr>
            <td ><strong>Fecha de toma de muestra:</strong></td>
            <td >'.$fechaTomaMuestra.'</td>
        </tr>
        <tr>
            <td><strong>Fecha de recepción de examen:</strong></td>
            <td>'.$fechaRecepcionExamen.'</td>
        </tr>
        <tr>
            <td><strong>Fecha de impresión :</strong> </td>
            <td>'.$fechaImpresion.'</td>
        </tr>
        <tr>
        <td><strong>Fecha de Tinción :</strong> </td>
        <td>'.$fechaTincion.'</td>
    </tr>
    <tr>
    <td><strong>Fecha de Análisis Diagnóstico :</strong> </td>
    <td>'.$fechaDiagnostico.'</td>
</tr>
        </table>

        
        <br>
        <br>
        <strong>Diagnóstico:  </strong>'.$Diagnostico.'<br><br>
    <strong>Descripción del Diagnóstico:</strong>
    <br>
    <br>
    <div >
       <textarea name="TextIngreso" rows="25" cols="80" >Descripción del diagnóstico</textarea>
    </div>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br>

    <Footer text-align="center">
    <hr>
            <strong><br>Laboratorio LABMUEST : Evaluación y Diagnóstico de Exámenes</strong>
    </Footer>';


// Agregar el contenido al PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Nombre del archivo PDF
$nombreArchivo = 'informe_diagnostico'.$rutPaciente.'.pdf';

// Salida del PDF (puedes elegir descargarlo o mostrarlo en el navegador)
$pdf->Output($nombreArchivo, 'I',);//muestra en pantalla
$pdf->Output($nombreArchivo, 'D');//descarga automaticamente.


?>