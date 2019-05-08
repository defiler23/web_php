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

	$conexion=mysqli_connect('localhost','root','','biblioteca')or die ("no se ha podido conectar al servidor de Base de datos");
    
    $ref=$_REQUEST["ref"];

    $consulta="SELECT * from libro where codigo like '$ref'";
    $resultado=mysqli_query($conexion,$consulta);

    while($mostrar=mysqli_fetch_array($resultado)){
    ?>
        <h3>Información sobre el libro <?php echo $mostrar['titulo']?> :</h3>
        <ul>
			<li><?php echo "Titulo: " . "<b>" . $mostrar['titulo'] . "</b>"?></li>
			<li><?php echo "Autor: " . "<b>" . $mostrar['autor'] . "</b>"?></li>
			<li><?php echo "Editorial: " . "<b>" . $mostrar['editorial'] . "</b>"?></li>
			<li><?php echo "Fecha: " . "<b>" . $mostrar['fecha'] . "</b>"?></li>
			<li><?php echo "Genero: " . "<b>" . $mostrar['genero'] . "</b>"?></li>
           	<li><?php echo "Precio en euros: " . "<b>" . $mostrar['precio'] . "</b>"?></li>
		</ul>
    
    <p><a href="listado_libro.php"> Volver atrás </a></p>;
    
<?php 	}  ?>
	

</body>
</html>
