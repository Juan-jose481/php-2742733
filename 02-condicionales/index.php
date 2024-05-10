<!-- Ejercicio 1  1.1-->

<?php
    echo 'Ejecutando condicionales..';
    echo"<br/>";
    $articulos = "8";

    if($articulos < 12){
        echo "Caja rapida";
    } else {
        echo "Caja normal";
     }

     echo"<br/>";

     /*  Ejercicio 1  1.2 */

     $años = "10";

     if ($años >= 18){
        echo"Puede votar";
     } 
     
     else if($años < 18){
        echo"No puede votar";
     }

     echo"<br/>";

     /*  Ejercicio 2 */

     $nombre = "Juan";

     $edad = "35";

     if ($edad >= 18){
        echo "Puede ingresar a la discoteca";
     } 

     else{
        echo "No puede ingresar a la discoteca";
     }

     if($nombre == "julian" xor $nombre == "samul"){
        echo "bienvenido puedes ingresar al VIP";
     }


     echo"<br> <br>";

     $estatura = "170";

     $velocidad = "20km";

     $edad = "13";

     if($velocidad > 17 && $estatura > 150)

     {
        echo "Puedes ingresar al equipo <br/>";
     }

     else{
        echo "No puedes ingresar al equipo <br/>";
     }

     if($velocidad > 17 && $estatura > 150 && $edad > 18){
        echo "vas a las ligas mayores";
     }

     else{
        echo "vas a las ligas menores";
     }

     echo"<br> <br>";

     $aire = "amarillo";

     switch($aire){
        case "verde":
            echo "calidad del aire es buena";
            break;

        case "amarillo":
            echo "calidad del aire es moderada";

            break;

        case "naranja":
            echo "calidad del aire no es buena para grupos sensibles";
            break;
        
        case "rojo":
            echo "calidad del aire no es saludable";
            break;

        case "púrpura":
            echo "calidad del aire es muy poco saludable";
            break;

        case "marrón":
            echo "calidad del aire es peligrosa";
            break;

        default:
                    echo "el color no es válido";
                    break;
     }

?>

