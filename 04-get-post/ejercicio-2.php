<?php

    $horas = $_POST['horas'];
    $valor = $_POST['valor'];
    $salario = $horas * $valor;

    echo

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario e impuesto</title>
</head>
<body>
    
    <h3>Calcular salario e impuesto de retencion en la fuente</h3>
    <form action="ejercicio-2.php" method="$_POST">
        <label for="horas">Horas trabajadas en el mes:</label>
        <input type="number" id="horas" name="horas" required><br><br>
        <label for="valor_hora">Valor por hora (en pesos):</label>
        <input type="number" id="valor_hora" name="valor_hora" required><br><br>
        <button type="submit">Calcular</button>


    </form>

</body>
</html>