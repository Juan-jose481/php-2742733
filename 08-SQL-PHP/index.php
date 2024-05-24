<?php

try{

    $conexion = new PDO("mysql: host=localhost; dbname=colegio", 'root', ''); 
    echo "Conexion OK". "<br>";

} catch (PDOException $e) {
    echo "Error:" . $e-> getMessage() . "<br>";
}


$nombre = 'Argiro';

$materia='psicologia';



//Vamos a preparar una sentencia SQL y la gurdamos en una variable

$statement = $conexion -> prepare("INSERT INTO `estudiantes` (`ID` ,`Nombre`, `Edad`,`Grado`, `Media técnica`) VALUES (NULL, :nombre, '16', '11', :materia)");

//ejecutar el statement

$statement -> execute(array( ":nombre"=>$nombre, ":materia"=>$materia));


//fetch() regresa solo un resultado   fetchAll() regresa todos los resultados

$statement = $statement-> fetchAll();

/* print_r($statement);
 */
foreach ($statement as $item){
    echo $item['ID'] . '-' . $item['Nombre']. '<br>' ;

}




?>