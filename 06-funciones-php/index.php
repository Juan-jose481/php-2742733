<?php

/* leer: functions php w3school */

/* echo "ejecutando.php"; */

/* creando funcion que diga si una persona es mayor o menor de edad */

function validarEdad($edad)
{
    if ($edad >= 18) {
        echo "Mayor de edad";
    } else {
        echo "No es mayor de edad";
    }
}

/* llamando funcion */

validarEdad(isset($_POST["edad"]) ? $_POST["edad"] : null);

//condicion ? true : false

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funtions PHP</title>
</head>

<body style="background-color: rgb(23, 23, 23);  color:white">

    <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="POST">
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad">
        <button type="submit">Validar edad</button>
    </form>
    <h1>funciones php 💻</h1>

</body>

</html>