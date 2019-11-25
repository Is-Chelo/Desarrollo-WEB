<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="registrar.php" method="POST">
		<label for="login">login:</label>
		<input type="text" name="login"><br><br>
		<label for="contra">password:</label>
		<input type="password" name="contra"><br><br>
		<label for="nb">nombre:</label>
		<input type="text" name="nombre"><br><br>
		<label for="ap">apellido</label>
		<input type="text" name="apellido"><br><br>
		<label for="em">email</label>
		<input type="text" name="email"><br><br>
		<label for="sexo">sexo:</label>
		<input type="radio" name="sexo" value="masculino">masculino
		<input type="radio" name="sexo" value="femenino">femenino<br><br>
		<label for="nivel">nivel:</label>
		<input type="text" name="nivel"><br><br>
		<input type="submit" name="" value="enviar">

	</form>
</body>
</html>