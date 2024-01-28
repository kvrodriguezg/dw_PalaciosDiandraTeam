<?php
class rutModel
{

    function validarut($rut)
    {
        $rut = strtoupper($rut);
        $a = 0;
        $suma = 0;
        $estado = "";

        //Validamos largo del RUT. En caso de ser menor a 10 se agregarán 0 a la izquierda.
        if (strlen($rut) < 10) {
            $rut = str_pad($rut, 10, '0', STR_PAD_LEFT);
        }
        if (strlen($rut) > 10) {
            return $estado = "MAL";
        }

        //Validamos que lo ingresado antes del guión seán números.
        for ($i = 0; $i < 8; $i++) {
            if (!is_numeric($rut[$i])) {
                return $estado = "MAL";
            }
        }

        //Validamos que el dígito verificador sea K o número.
        if (!is_numeric($rut[9]) && $rut[9] != 'K') {
            return $estado = "MAL";
        }

        //Validamos posición correcta del guión.
        if ($rut[8] != '-') {
            $estado = "MAL";
        } else {
            //Definimos arreglo con números para el cálculo.
            $calculo = array(3, 2, 7, 6, 5, 4, 3, 2, 11);

            //Realizamos operaciones.
            for ($i = 0; $i < 8; $i++) {
                $a = intval($rut[$i]) * $calculo[$i];
                $suma = $suma + $a;
            }
            $divisiondecimal = $suma / $calculo[8];
            $divisionentero = intval($divisiondecimal);
            $valordecimal = $divisiondecimal - $divisionentero;
            $resta11 = round($calculo[8] - ($calculo[8] * $valordecimal));
            $digito = intval($resta11);

            //Realizamos validaciones para definir si se encuentra correcto el dígito verificador ingresado.
            if ($rut[9] == 'K') {
                if ($digito == 10) {
                    $estado = "BIEN";
                } else {
                    $estado = "MAL";
                }
            } else if (($digito == 11 && intval($rut[9]) == 0) || ($digito == intval($rut[9]))) {
                $estado = "BIEN";
            } else if ($digito == 11) {
                $estado = "MAL";
            } else if ($digito == 10) {
                $estado = "MAL";
            } else {
                $estado = "MAL";
            }
        }
        return $estado;
    }
}
?>