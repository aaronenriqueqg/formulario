<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Producto</title>
</head>
<body>
	<form action="insertar.php" method="post" name="form">
		<label>Producto : </label><input type="text" name="nombre"><br/>
		<label>Categoria : </label><input type="text" name="categoria"><br/>
		<label>Precio : </label><input type="text" name="precio"><br/>
		<input type="submit" value="Insertar Datos"><br/><br/>

	</form>

   <form action="select.php" method="post" name="form">
		<label>Buscar Producto</label><input type="text" name="nombre"><br/>
		<input type="submit" value="Seleccionar">
		<br/><br/>
		
	</form>

<form action="delete.php" method="POST" name="form">
		<label>Borrar Producto</label><input type="text" name="nombre"><br/>
		<input type="submit" value="Borrar">
	</form>


</body>
</html>