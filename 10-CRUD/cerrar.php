<?php

    session_start();
    session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../10-CRUD/Estilos CSS/cerrar.css">
</head>
<body>

    <header class="arriba">
            
            <div class="inicios">
                <a class="inicio" href="">Home</a>
                <div class="dos">
                    <a class="botones" href="">Iniciar sesión</a>
                    <a class="botones" href="">Registrarse</a>
                </div>
            </div>
    </header>

    <div class="contenedor">
         <div class="carta">
                <h1>Sesión cerrada 😅</h1>
                <a href="./user.php">User page</a>
        </div>
    </div>
    
</body>
</html>