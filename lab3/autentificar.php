<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include('conexion.php');
	$login=$_POST['login'];
	$password=($_POST['password']);



	$sql="SELECT * FROM usuarios WHERE login='$login' AND password='$password' ";
	$resultado=$con->query($sql);

	if($fila=$resultado->fetch_assoc()){
		echo'<meta http-equiv="REFRESH" content=0;URL="Fintroducir.html"';
		
	}else{
		echo "mal";

	}
	
	$recordar=$_POST['recordarusuario'];
	$recordarpswd=$_POST['recordarpassword'];


	if($recordar=='on'){
	setcookie("login",$login,time()+3600);
	}
	
	if($recordarpswd=="on"){
		setcookie("password", $password,time()+3600);
	}	

	?>
</body>
</html>


