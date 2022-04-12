<!DOCTYPE html>
<html class="no-js" lang="es">
	<head>
  		<link rel="stylesheet" href=" CSS/estilo.css">
  	</head>
	<body>
	<div class = "centrar">
  		<b>COLUMNA DE FOTOS</b>
  	</div>
  	
  	<table border = \"1\" style='border-collapse: collapse'  >
  	<tr>
  	<?php
  		$directory = "Fotos/";
  		// linea que abre la carpeta con las fotos
  		$foto = opendir($directory);
  		// While que inserta la imagen en la tabla
  		while ($fichero = readdir($foto)) {
			if ($fichero  != "." && $fichero  != ".."){
				$tamano = GetImageSize($directory . $fichero );
				?>
				<td><img src = <?php echo $directory.$fichero  ?> width = "400px"></td>
				<?php
				$cont = $cont + 1;
			// contador para controlar que solo sean 4 columnas
			if($cont%4 == 0){
				echo("</tr>");
	  			}
	  		}
	  	}
	  	// cierre de carpeta
	  	closedir($foto)
	?>
	</tr>
	</table> 
	</body>
</html>

