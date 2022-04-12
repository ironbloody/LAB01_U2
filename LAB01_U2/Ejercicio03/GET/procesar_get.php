<!DOCTYPE html>
<html class="no-js" lang="es">
	<head>
  		<link rel="stylesheet" href=" CSS/estilo.css">
  	</head>
	<body>
	<!-- Clase que centra los textos -->
	<div class = "centrar">
  		<?php echo 'Tabla ' . $_GET["tamano"] . ' X ' . $_GET["tamano"] . "<BR>"; ?>
  	</div>
  	<?php
  	// Se define el tamano de la tabla recibiendolo del index
  	define('TAM', $_GET["tamano"]);
  	// Se crean variables para recibir los colores
  	$color1 = $_GET["color1"];
  	$color2 = $_GET["color2"];
  	// Se crea la tabla
  	echo "<table border = \"1\" style='border-collapse: collapse'  >";
		for ($fila = 1; $fila <= TAM; $fila++) {
			// Se cambia el color de la columna 1
			if ($fila % 2 == 0) 
       			echo "<tr bgcolor=#$color1>";
			else
			// Se cambia el color de la columna 2
			if ($fila % 2 == 1) 
       			echo "<tr bgcolor=#$color2>";
			else
			echo ("<tr>");
	  		for ($columna = 1; $columna <= TAM; $columna++ ) {
	  			$cont = $cont + 1;
	    	  		echo "<td>$cont</td>";
	    		}
	    echo ("</tr>\n");
	  }
	echo "</table>";
	  ?>
	</body>
</html>
