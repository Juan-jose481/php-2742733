<!DOCTYPE html>
<html>
<body>

<?php  

    //While Loop

    //Cuente hasta 500 de veite en veinte:

    $i = 0;

    while ($i < 200) {
    $i+=20;
    echo "$i<br>";
    }

    echo "</br>";


    //For Loop

    // Detén el ciclo cuando $xsea 12:

    for ($x = 0; $x <= 15; $x++) {
        if ($x == 12) break;
        echo "El número es: $x <br>";
    }

    echo "</br>";



    //Foreach Loop

    //Detenga el ciclo si $xes azul:

    $colors = array("Juan", "Diego", "David", "Samuel");

    foreach ($colors as $x) {
  if ($x == "Samule") break;
  echo "$x <br>";
}

?>  

</body>
</html>




