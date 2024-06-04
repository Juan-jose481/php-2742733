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
      echo "conexion OK";
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
  <link rel="stylesheet" href="registro.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

  <div class="card" style="width: 25rem ">
    <div class="card-body">
      <h1>Registrate</h1>
      <br>
      <form action="registro.php" method="POST">
        <label for="user">Usuario</label>
        <br>
        <input type="text" placeholder="Usuario..." name="user">
        <hr>
        <label for="password">Contraseña</label>
        <br>
        <input type="text" placeholder="Password..." name="password">
        <hr>
        <label for="mail">Correo</label>
        <br>
        <input type="email" placeholder="Email..." name="email">
        <hr>
        <button type="submit">Registrate</button>
      </form>

      <br>

      <?php if (isset($_SESSION['userRegister'])) : ?>
        <a href="index.php">Iniciar sesion</a>
        <p>Datos registrados, ya puedes iniciar sesion</p>
        <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'] ?> </p>
      <?php endif ?>

    </div>
  </div>





</body>

</html>