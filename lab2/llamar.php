<?php
	include ("operaciones.php");
	$n = $_GET['caja1'];
	$cadena = $_GET['caja2'];
	$a = $_GET['caja3'];
	$b = $_GET['caja4'];
	$c = $_GET['caja5'];

	$op = new operaciones($n, $cadena, $a, $b, $c);
	$op->CalcularFibonaci();
	$op->CalcularMenor();
	$op->Piramide();
?>