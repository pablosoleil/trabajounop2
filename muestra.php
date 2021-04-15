<!DOCTYPE html>
<html>
<head>
	<title>muestra</title>

<link rel="stylesheet" type="text/css" href="esti.css">

</head>
<body>
	<?php

	$enun=$_POST['enunciado'];
	$col=$_POST['color'];
	$tam=$_POST['tamaño'];

	?>

	<form class="form2">
		
		<input type="text" id="enun" value="<?php echo $enun ?>">
		<input type="text" id="col" value="<?php echo $col ?>">
		<input type="text" id="tam" value="<?php echo $tam ?>">
			
	</form>

	<div class="cuadro" id="cuadro"></div>

	<script>
		enun=document.getElementById("enun").value;
		col=document.getElementById("col").value;
		tam=document.getElementById("tam").value;

		document.getElementById("cuadro").innerHTML=enun;

		document.getElementById("cuadro").style.color=col;

		document.getElementById("cuadro").style.fontSize=tam+"px";

	</script>

</body>
</html>