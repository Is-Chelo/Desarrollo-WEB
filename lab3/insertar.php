<?php 
	include ("conexion.php");

	for ($i=1; $i <=4; $i++) { 
		
	
	$Nom=$_POST['nombres'.$i];
	$Ape=$_POST['apellidos'.$i];
	$Cu=$_POST['cu'.$i];
	$Sexo=$_POST['sexo'.$i];
	if(isset($Nom)){
	$sql="insert into alumnos(nombres,apellidos,cu,sexo) values ('$Nom','$Ape','$Cu','$Sexo')";
	$resultado=$con->query($sql);
	}
}

?>