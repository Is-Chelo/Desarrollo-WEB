<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		

<?php include ("conexion.php");
$sql="SELECT nombre,apellido,email,password from usuarios ";
//echo $sql;
$resultado=$con->query($sql);
?>
<table>
	<tr>
	<th>Nombres</th>
	<th>Apellidos</th>
	<th>email</th>
	<th>password</th>
</tr>
<?php 
while ($fila=$resultado->fetch_assoc())
{
 ?><tr>
 	<td><?php echo $fila['nombre']; ?></td>
	<td><?php echo $fila['apellido']; ?></td>
	<td><?php echo $fila['email']; ?></td>
	<td><?php echo $fila['password']; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>