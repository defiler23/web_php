<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 

    $basededatos = "biblioteca";
    
    $conexion = mysqli_connect("localhost", "root", "" ) or die ("no se ha podido conectar al servidor de Base de datos");
    
    //mysqli_set_charset($conexion, “utf8”);
    
    $db = mysqli_select_db($conexion,$basededatos) or die ("no se ha podido conectar a la base de datos" );
    
    $consulta = "SELECT * FROM libro";
    $resultado = mysqli_query( $conexion, $consulta ) or die ("ha fallado la consulta");
    
    //$totalRegistros = mysqli_num_rows($resultado);
    
    echo "<h3>Libros disponibles:</h3></br>";
    while ($columna = mysqli_fetch_array( $resultado )){
    echo $columna['titulo'] . " (" . $columna['autor'] . ' ) 
    <a href="info_libro.php?ref=' . $columna['codigo'] . '"> Ver informacion </a> <br>';
    }

    //mysqli_close( $conexion );

?>

    


</body>
</html>
