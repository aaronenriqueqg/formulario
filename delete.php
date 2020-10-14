<?php
		include("conexion.php");
		
		$con= mysqli_connect($host,$user,$pass) or die('problemas al conectar al servidor');
		mysqli_select_db($con,$db) or die('problemas al conectar base de datos');
		$registro=mysqli_query($con,"SELECT *FROM producto where nombre='$_POST[nombre]'")or die("problemas en consulta".mysqli_error($con));
		if($reg=mysqli_fetch_array($registro)){
			mysqli_query($con,"DELETE FROM producto where nombre='$_POST[nombre]'") or die ("problemas en consulta: ".mysqli_error($con));
			echo "datos eliminados";
		}else{
			echo "datos no encontrados";
		}



?>