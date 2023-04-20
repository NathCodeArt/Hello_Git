<?php
include 'punto_2.html';
if(isset($_POST['correctas']) && isset($_POST['incorrectas']) && isset($_POST['en_blanco'])) {
    $correctas = intval($_POST['correctas']);
    $incorrectas = intval($_POST['incorrectas']);
    $blanco = intval($_POST['en_blanco']);

    $puntaje = $correctas * 4 - $incorrectas;

    echo 'El puntaje final es: ' .$puntaje;
    }
?>