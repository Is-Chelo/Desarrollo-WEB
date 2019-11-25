<!DOCTYPE html>
<html>
<head>
	<title>paso</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
	session_start();

	if(isset($_SESSION['login'])){?>

		<?php
		if($_SESSION['nivel']==1){
		?>		
		<div id="contenido">
			<div id="arriba">
				<h3>Bienvinidos al Hotel Tarauco</h3>
				<h3>usuario :<?php echo $_SESSION['login'];?></h3>
				<h3>nivel: <?php echo $_SESSION['nivel'];?></h3> 
			</div>
			<div id="izquierda">
				<ul class="menu">
					<li class="centro"><a href="#">Habitacion</a></li>
					<li class="centro"><a href="#">Tipo Habitacion</a></li>
					<li class="centro"><a href="#">Reservas</a></li>
					<li class="centro"><a href="#">Salir</a></li>
				</ul>
			</div>
			<div id="cuerpo"></div>
		</div>
		<?php }else{?>			
		<div id="contenido">
			<div id="arriba">
				<h3>Bienvinidos al Hotel Tarauco</h3>
				<h3>usuario :<?php echo $_SESSION['login'];?></h3>
				<h3>nivel: <?php echo $_SESSION['nivel'];?></h3> 
			</div>
			<div id="izquierda">
				<ul class="menu">
					<li class="centro"><a href="#">Habitacion</a></li>
					<li class="centro"><a href="#">Tipo Habitacion</a></li>
					<li class="centro"><a href="#">Reservas</a></li>
					<li class="centro"><a href="#">Salir</a></li>
				</ul>
			</div>
			<div id="cuerpo"></div>
		</div>
		<?php } ?>

	<?php }else{
		echo "putito";}?>


</body>
</html>