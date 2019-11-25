<?php
include('conexion.php');
$login=$_POST['login'];
$password=$_POST['contra'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$sexo=$_POST['sexo'];
$nivel=$_POST['nivel'];
	
$sql="	INSERT INTO usuarios (login,contrasena,nombres,apellidos,email,sexo,nivel) VALUES ('$login', '$password','$nombre', '$apellido', '$email', '$sexo', '$nivel')";
	$resultado=$con->query($sql);
	
	$sql="SELECT * FROM usuarios WHERE login='$login' AND contrasena='$password' ";
	$res=$con->query($sql);
	$fila=$res->fetch_assoc();
	echo $fila['login'];
	
?>