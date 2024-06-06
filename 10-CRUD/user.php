<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <link rel="stylesheet" href="../10-CRUD/Estilos CSS/user.css">
</head>
<body>

    <div class="contenedor">
        <div class="carta">
                 <?php if( isset( $_SESSION['userRegister']) ) : ?>

            <h1> Bienvenido 😎 <?php echo $_SESSION['userRegister']; ?> </h1>
            <a href="./cerrar.php">Cerrar sesión </a>
            <br><br>
            <a href="./index.php">Home</a>

            <?php else : ?>

                <h1>No has iniciado sesión 😥</h1>
                <a href="./index.php">Iniciar sesión</a>

            <?php endif ?>
        </div>
    </div>
    
</body>
</html>