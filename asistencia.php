<?php

//Ejercicio uno Asistencia

include 'asistencia.html';

    $nota = null;
    $asis = null;
    // $total_clases = 30; estas son las variables
    const CLASES = 30;

    if (isset($_POST['operador'])) {
        $nota = $_POST['nota'];
        $asis = $_POST['asis'];
    
        if ($nota >= 1 && $asis >= (CLASES*0.8)) {
            echo 'Aprobo';
        }
        else {
            echo 'No Aprobo';
        }
    }
?>
// inset valida las cajas para que corra el programa
var_dump =va mirar lo que hay en una caja que hay dentro de las variables
