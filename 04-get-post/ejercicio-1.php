<?php

    if ($_GET['edad']) 
        $edad = intval($_GET['edad']);

        if ($edad >= 18) {
            echo "<h2>Es mayor de edad.</h2>";
        } else {
            echo "<h2>Es menor de edad.</h2>";
        }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Edad</title>
</head>
<body>

<h3>Verificación de Edad</h3>
    <form action="ejercicio-1.php" method="GET">
        <label for="edad">Ingresar edad:</label>
        <input type="number" id="edad" name="edad" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>