<?php
     include('conexion.php');
     if(isset($_POST['nombre'])&& !empty($_POST['nombre']) && isset($_POST['categoria'])&& !empty($_POST['categoria']) && isset($_POST['precio'])&& !empty($_POST['precio']) )
     {
     	$con=mysqli_connect($host,$user,$pass,$db) or die('problemas al conectar');
     	mysqli_query($con,"INSERT INTO producto (nombre,categoria,precio) VALUES('$_POST[nombre]','$_POST[categoria]','$_POST[precio]')");
     	echo "datos insertados";
     }
     else{
     	echo "problemas al insertar datos";
     }



?>