<?php
if (($_POST['numero1']) && ($_POST['numero2']) && ($_POST['numero3'])) {
    $numero1 = intval($_POST['numero1']);
    $numero2 = intval($_POST['numero2']);
    $numero3 = intval($_POST['numero3']);

    $mayor = max($numero1, $numero2, $numero3);

    echo "<h2>Resultado</h2>";
    echo "<p>Número 1: $numero1</p>";
    echo "<p>Número 2: $numero2</p>";
    echo "<p>Número 3: $numero3</p>";
    echo "<p>El número mayor es: $mayor</p>";
} 
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar Números</title>
</head>
<body>
    <h2>Ingrese Tres Números</h2>
    <form action="ejercicio-3.php" method="POST">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>
        
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>
        
        <label for="numero3">Número 3:</label>
        <input type="number" id="numero3" name="numero3" required><br><br>
        
        <button type="submit">Comprobar</button>
    </form>
</body>
</html>