<?php

//SQL Syntax

// 1. SQL Select
// Ejemplo: SELECT `ID`, `Edad`, `Documento` FROM `estudiante` WHERE 1;
//Selcecciona todos los registros de ID, Edad y Documentos dentro de la tabla de estudiante

// 2. SQL SELECT DISTINCT
// Ejemplo: SELECT DISTINCT `ID`, `Grado`, `Media técnica`, `Documento` FROM `estudiante` WHERE 1;
// Solo extrae datos unicos sin repetir

// 3. SQL WHERE
// Ejemplo: SELECT `Grado` FROM `estudiante` WHERE 1;
// Selecciona datos unicos de una columna

// 4. SQL ORDER BY
// Ejemplo: SELECT * FROM `estudiante` ORDER BY Grado;
// Ordena la columna en orden acendente o tambien puede organizarla en orden decendente

// 5. SQL AND
// Ejemplo: SELECT * FROM estudiante WHERE `Media técnica`= 'Multimedia' AND Nombre LIKE 's%';
// Selecciona en especifico una lista segun su iniciar o un registro

// 6. SQL OR
// Ejemplo: SELECT * FROM estudiante WHERE`Media técnica` = 'Sistema' OR Edad = '> 18';
// Seleciona solo el que cumple con las propiedades de la columna multimedia si es menor a 18

// 7. SQL NOT
// Ejemplo: SELECT * FROM estudiante WHERE NOT `Media técnica` = 'Multimedia';
// Este elimina de la lista los que no se desa que se muestren  

// 8. SQL INSERT INTO
// Ejemplo: INSERT INTO estudiante (Nombre, Edad, Grado, `Media técnica`, Documento) VALUES ('Juan', '21', '11', 'Sistema', '435506');
// Agrega nuevos datos a la tabla estudiantes

// 9. SQL NULL Values
// Ejemplo: SELECT `Edad` FROM `estudiante` WHERE `Edad` IS NOT NULL;
// Selecciona el valor no vacio de la tabla de la Edad seleccionando la Edad el cual no es nulo

// 10. SQL UPDATE
// Ejemplo: UPDATE `estudiantee` SET `edad`= '18' WHERE `ID` = 3;
// Actualiza los datos de la tabla 

// 11. SQL DELETE
// Ejemplo: DELETE FROM `estudiante` WHERE `nombre`= 'Samuel';
// Elimina los datos ya esxixtentes en la tabla


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>