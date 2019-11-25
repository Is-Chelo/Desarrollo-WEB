<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="autentificar.php" method="POST">
		<label for="txtn">Usuario</label>
		<input type="text" name="login" 
			<?php
				if(isset($_COOKIE['login'])){
				?>
				value="
				<?php
				echo $_COOKIE['login'];
				}
			?>
		"><br><br>
		<label for="txtn">Password</label>
		<input type="text" name="password"
			<?php
				if(isset($_COOKIE['password'])){
				?>
				value="
				<?php
				echo $_COOKIE['password'];
				}
			?>"><br><br>


		<input type="checkbox" name="recordarusuario">Recordar Usuario <br>
		<input type="checkbox" name="recordarpassword">Recordar Password <br> <br>
		<input type="submit" name="" value="Enviar">

		
	</form>
</body>
</html>