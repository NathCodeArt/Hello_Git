<?php
include 'punto_4.html';
if (isset(%_POST['datos'])) {
    $a = 1;
    $cant = $_POST['cantidad'];

   // while ($a <= $cant) {
   //     echo 'Hola mundo' .$a . '<br>'; 
     //   $a++;
    //}

    for ($a=1; $a <= $cant; $a++) {
        echo 'Hola mundo' .$a . '<br>';
    }
}
?>