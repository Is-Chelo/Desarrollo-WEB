<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="insertar.php" method="POST">
	<table style="padding: 10px; width: 600px; ">
		<tr>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Cu</th>
			<th>Sexo</th>
			<th>Carrera</th>
		</tr>
	</table>

	<?php
	$n=$_POST['n'];
	session_start();
	$_SESSION['$n']=$n;
		for ($i=1; $i <=$n; $i++) {
			echo $i; 
			echo "<input type='text' name='nombres$i' style= ' padding: 3px; width:120px; margin:5px'  >";
			echo "<input type='text' name='apellidos$i' style='padding: 3px; width:120px; margin:5px'  >";
			echo "<input type='text' name='cu$i' style='padding: 3px;  width:70px; margin:5px'  >";
			echo "<input type='radio' name='sexo$i' value ='masculino'>M";
			echo "<input type='radio' name='sexo$i' value ='Femenino'>F";	
			echo "<br>";
		}

	?>
	<input type="submit" name="" value="enviar">
	</form>
</body>
</html>