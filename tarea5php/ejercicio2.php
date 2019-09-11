<?php

	$nF=$_POST["txtn1"];
	$nC=$_POST["txtn2"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">	
		<tr>
			<th>X</th>
			<?php for ($i=1; $i <=$nC; $i++) { 
				?>
				<th><?php echo $i?></th>
			<?php } ?>
		</tr>

	<?php
		for ($i=1; $i<=$nF; $i++) { 
		?>
			<tr>
			<th><?php echo $i ?></th>

			<?php 
				for ($j=1; $j <=$nC ; $j++) { 
				?>
				<td> <?php echo $i*$j?></td>
				<?php } ?>
			</tr>

		<?php } ?>

	</table>
</body>
</html>

