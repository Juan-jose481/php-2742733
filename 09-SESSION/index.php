<?php session_start();

if( $_SERVER["REQUEST_METHOD"] == 'POST' ){

        $usuario = $_POST['user'];
        $password = $_POST['password'];

        $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
        $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;
        
        if( empty($usuario) or empty($password) ){
            echo 'rellene completo el formulario';
        }else{
           /*  echo $usuario . ' - ' . $password;
            if( $usuario == $user_register && $password == $pass_register){
                echo 'listo, iniciaste sesion 👻';
                header('location: user.php');
            }else{  echo 'Tu usuario no existe😴';} */

            //CONEXION CON LA BASE DE DATOS......
            //entrega final



            try {
                $conexion = new PDO("mysql: host=localhost; dbname=focaapp;", 'root','');
                echo "conexion OK";
            } catch (PDOException $e) {
               echo "Error: " . $e->getMessage();
            }

            $statement = $conexion->prepare("SELECT * FROM userapp
            WHERE username = :user AND contraseña = :pass");
            
            $statement->execute(array(':user'=>$usuario, ':pass'=>$password)); 
        
            $result = $statement->fetchAll();

            if ($result) {
                $_SESSION['userRegister'] = $usuario;
                $_SESSION['passRegister'] = $password;
                header('location:user.php');
            }else{
                echo 'false';
            }
        }


}
    //$_SESSION['pais'] = 'colombia';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</head>
<body>

<div class="card" style="width: 25rem ">
    <div class="card-body">
        <h1>Pagina de inicio</h1>

        <br>

        <form action="index.php" method="POST">
            <label for="user">Usuario</label>
            <br><br>
            <input type="text" placeholder="usuario" name="user">
            <br><br>
            <label for="password">Contraseña</label>
            <br><br>
            <input type="text" placeholder="password" name="password">
            <br><br>
            <button type="submit">Inicio sesion</button>
        </form>

        <br>

        <a href="./registro.php">Registrate</a>
    </div>
</div>
    
</body>
</html>