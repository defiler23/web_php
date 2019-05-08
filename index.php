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
    session_start();
    $muestra = false;
    //session_destroy();

?>
    
<?php 
if(!isset($_SESSION["suma"]) && !isset($_SESSION["lista"])){
        $_SESSION["suma"]=0;
        $_SESION["lista"]=" ";
    } else {
        $muestra = true;
    }
    
if(isset($_REQUEST["total"]) && isset($_REQUEST["producto"]) ){
        $muestra = true;
        $_SESSION["suma"]=$_SESSION["suma"]+$_REQUEST["total"];
        if(!isset($_SESSION["lista"])){
            $_SESSION["lista"]=$_REQUEST["producto"]." ".$_REQUEST["total"]."<br>";
        } else {
            $_SESSION["lista"]=$_SESSION["lista"].$_REQUEST["producto"]." ".$_REQUEST["total"]."<br>";
    }
}
    
if($muestra){
        echo "<h3>Total a gastar: ".$_SESSION["suma"]."<br><h3/>";
        echo $_SESSION["lista"];
    }
    ?>

<p><b>Productos disponibles:</b></p>
<ul>
<li>
<a href="<?php echo $_SERVER['PHP_SELF'] . '?total=80' . '&producto=<b>Pantalones decarton<b/>'  ?>">Pantalones decarton 50</a></li>
<li> 
<a href="<?php echo $_SERVER['PHP_SELF'] . '?total=20' . '&producto=<b>Zapatillas Lacoste<b/>'  ?>">Zapatillas Lacoste 30</a></li>
<li>  
<a href="<?php echo $_SERVER['PHP_SELF'] . '?total=60' . '&producto=<b>Camiseta Louis Piton<b/>'  ?>">Camiseta Louis Piton 25</a></li>
<li>  
<a href="<?php echo $_SERVER['PHP_SELF'] . '?total=80' . '&producto=<b>Polo Ralf Laua<b/>'  ?>">Polo Ralf Laua 55</a> <br><br></li>
</ul>


    
  
</body>
</html>
