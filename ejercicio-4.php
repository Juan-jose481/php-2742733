<?php

$metros = $_POST['Metros'];

$pared = $_POST['Pared'];

$precio1 = $metros * 2000 + 15000;

$precio2 = $metros * 4000 + 15000;

if ($metros == "lisa"){
    echo "el precio de la pintada es $precio1";
} else {
    echo "el precio de la pintada es $precio2";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="ejercicio-4.php" method="post">
        <label for="Metros">metros</label>
        <input id="Metros" type="number" placeholder="metros" name="Metros">
        <br>

        <label for="Pared">cotizacion</label>
        <input id="Pared" type="texto" placeholder="lisa/nolisa" required name="Pared">
        <br>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>