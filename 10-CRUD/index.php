<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../10-CRUD/Estilos CSS/index.css">
    
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
                <h1>Pagina de inicio</h1>
                <div class="registro">
                    <form action="index.php" method="POST">
                        <label class="rellenar" for="user">Usuario</label>
                        <br>
                        <input class="usuario" type="text" placeholder="Usuario..." name="user">
                        <br>
                        <label for="Password">Contraseña</label>
                        <br>
                        <input class="contraseña" type="text" placeholder="Password..." name="password">
                        <br><br>
                        <button class="registra" type="submit">Inicio sesion</button>
                    </form>
                    <br>
                    <a href="./registro.php">Registrate</a>
                </div>
                <br>
                <?php session_start();

                if( $_SERVER["REQUEST_METHOD"] == 'POST' ){

                        $usuario = $_POST['user'];
                        $password = $_POST['password'];

                        $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
                        $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;
                        
                        if( empty($usuario) or empty($password) ){
                            echo 'Rellene completo el formulario';
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
                                echo "Conexion OK";
                            } catch (PDOException $e) {
                            echo "Error: " . $e->getMessage();
                            }

                            $statement = $conexion->prepare("SELECT * FROM userapp
                            WHERE username = :user AND contraseña = :pass");
                            
                            $statement->execute(array(':user'=>$usuario, ':pass'=>$password)); 
                        
                            $result = $statement->fetch();

                            print_r($result);

                            echo ' - ' . empty($result) . ' . ';       

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

        </div>

        <img class="aldea" src="../10-CRUD/Imagenes/aldea2.png" alt="">
  </div>
    
</body>
</html>