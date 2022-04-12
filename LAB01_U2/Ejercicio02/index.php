<!DOCTYPE html>
<html class="no-js" lang="es">
	<head>
  		<link rel="stylesheet" href=" CSS/estilo.css">
  	</head>
	<body>
	<!-- Clase que centra los textos-->
	<div class = "centrar">
  		<b>TABLA DE 50x50</b>
  	</div>
  	<?php
  	// Se define el tamano
  	define('TAM', 50);
  	// Se crea la tabla
  	echo "<table border = \"1\" style='border-collapse: collapse'  >";
		for ($fila = 1; $fila <= TAM; $fila++) {
			// Cambia de color la columna 1
			if ($fila % 2 == 1) 
       			echo "<tr bgcolor=#bdc3d6>";
			else
			echo ("<tr>");
			// Se crean las filas 
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
