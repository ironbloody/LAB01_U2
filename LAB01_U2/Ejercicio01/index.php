<!DOCTYPE html>
<html class="no-js" lang="es">
	<head>
  		<link rel="stylesheet" href=" CSS/estilo.css">
  	</head>
	<body>
	<!-- Clase que centra los textos -->
	<div class = "centrar">
  		<b>TABLA DE 10x10</b>
  	</div>
  	
  	<table border = \"1\" style='border-collapse: collapse'  >
  	<?php
  		// Rellena las columas
		for ($fila = 1; $fila <= 10; $fila++) {
			echo ("<tr>");
			// Rellena las filas
	  		for ($columna = 1; $columna <= 10; $columna++ ) {
	  			// contador para rellenar del 1 al 100
	  			$cont = $cont + 1;
	    	  		echo "<td>$cont</td>";
	    		}
	    echo ("</tr>\n");
	  }
	  ?>
	</table>
	  
	</body>
</html>
