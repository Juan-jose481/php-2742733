<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registro.css">



</head>

<body>

    <div class="contenedor">
        <div class="carta">
            <h1>Registrate</h1>
            <div class="registro">       
                <form action="registro.php" method="POST">
                    <label class="rellenar" for="user">Usuario</label>
                    <br>
                    <input class="usuario" type="text" placeholder="Usuario..." name="user">
                    <br>
                    <label for="password">Contraseña</label>
                    <br>
                    <input class="contraseña" type="text" placeholder="Password..." name="password">
                    <br>
                    <label for="mail">Correo</label>
                    <br>
                    <input class="inputt" type="email" placeholder="Email..." name="email">
                    <br><br>
                    <button class="registra" type="submit">Registrate</button>
                            
                </form>      
            </div>

            <br>

            <?php if (isset($_SESSION['userRegister'])) : ?>
                <p>Datos registrados, ya puedes iniciar sesion</p>
                <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'] ?> </p>
                <a href="index.php">iniciar sesion</a>
            <?php endif ?>

            <?php session_start();

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    echo 'Datos enviados';

                    echo '<br>';
                    $usuario = $_POST['user'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];



                    if (empty($usuario) or empty($password) or empty($email)) {
                        echo 'Rellene completo el formulario';
                    } else {
                        //echo $usuario . ' - ' . $password;
                        $_SESSION['userRegister'] = $usuario;
                        $_SESSION['passRegister'] = $password;
                        $_SESSION['emailRegister'] = $email;

                        //echo ' - variables de sesion guardadas🥶';
                        //header('location: index.php');

                        try {
                            $conexion = new PDO("mysql: host=localhost; dbname=focaapp;", 'root', '');
                            echo "Conexion OK";
                        } catch (PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }



                        $statement = $conexion->prepare("INSERT INTO `userapp`( `ID`, `username`, `correo`, `contraseña`) VALUES (NULL, :username, :pass ,:correo)");


                        $statement->execute(array(":username" => $usuario, ":pass" => $password, ":correo" => $email));

                        /* 
                                foreach ($statement as $item) {
                                    echo$item['ID'] . ' - '. $item['Nombre'] . '<br>'; */
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>

