<?php
echo 'Ejecutando sintaxis variables..';
?>


<?php

$nombre_1 = "Juan";
$nombre_2 = "Samuel";

echo " Hola $nombre_1 y $nombre_2, ¿Como estan? <br> <br> Pagina creada por: <br> <br> - $nombre_1 <br> <br> -$nombre_2 <br> <br>" ;
?>

<?php

$mi_numero = 8;
$respuesta = $mi_numero;
$respuesta += 2;
$respuesta *= 2;
$respuesta -=2;
$respuesta /= 2;
$respuesta -= $mi_numero;

echo $respuesta;
?>