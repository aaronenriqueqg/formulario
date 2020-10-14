<?php
		include("conexion.php");
		
		$con= mysqli_connect($host,$user,$pass) or die('problemas al conectar al servidor');
		mysqli_select_db($con,$db) or die('problemas al conectar base de datos');
		$registro=mysqli_query($con,"SELECT *FROM producto where nombre='$_POST[nombre]'")or die("problemas en consulta".mysqli_error());
		if($reg=mysqli_fetch_array($registro)){
			echo "Producto:".$reg['nombre']."<br>";
			echo "Categoria:".$reg['categoria']."<br>";
			echo "Precio: ".$reg['precio']."<br>";
		}else{
			echo "datos no encontrados";
		}



?>