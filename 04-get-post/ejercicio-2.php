<?php

    $horas = $_POST['horas'];
    $valor = $_POST['valor'];
    $resultado = $horas * $valor;

    echo $horas * $valor;

    if ($resultado >= 2200000){
        echo "hay retencion de fuente";
    } else {
        echo "no hay retencion de fuente";
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

<h2>Calculadora de Salario</h2>
    <form action="ejercicio-2.php" method="post">
        <label for="horas">Horas Trabajadas en el Mes:</label><br>
        <input type="number" id="horas" name="horas" required><br>
        <label for="valor">Valor de la Hora:</label><br>
        <input type="number" id="valor" name="valor" required><br><br>
        <button type="submit">Calcular</button>
    </form>

   
</body>
</html>