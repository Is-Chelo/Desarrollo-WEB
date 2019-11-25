<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include('conexion.php');
	$login=$_POST['login'];
	$contra=$_POST['contra'];


	$sql="SELECT * FROM usuarios WHERE login='$login' AND contrasena='$contra' ";
	$resultado=$con->query($sql);

	if($fila=$resultado->fetch_assoc()){
		$nivel=$fila['Nivel'];
		$login=$fila['login'];

		session_start();
		$_SESSION['nivel']=$nivel;
		$_SESSION['login']=$login;
		echo'<meta http-equiv="REFRESH" content=0;URL="principal.php"';
	}
	else{
		echo"MAL";
		echo '<meta http-equiv="REFRESH" content=2;URL="login.html">';
	}
	?>
</body>
</html>