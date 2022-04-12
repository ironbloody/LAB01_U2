<!DOCTYPE html>
<html class="no-js" lang="es">
	<head>
		<link rel="stylesheet" href=" CSS/estilo.css">
	</head>
	<body>
	<center>
	<h2>Formularios: Tabla</h2><hr>
	
	<!-- Se elige el metodo a usar en este caso GET-->
  	<form METHOD="POST" ACTION="procesar_post.php">
 	<table>
		<tr>
			<!-- Se crea variable tamano para ingresar datos -->
		    	<td ALIGN="LEFT">Tama&ntilde;o:</td>
		    	<td ALIGN="RIGHT" COLSPAN="3"><input TYPE="TEXT" NAME="tamano" SIZE=25 maxlength=25"></td>
	  	</tr>
	  	<tr>
	  	
	  		<!-- Se crea variable color 1 para ingresar datos -->
		    	<td ALIGN="LEFT">Color 1:</td>
		    	<td ALIGN="RIGHT" COLSPAN="3"><input TYPE="TEXT" NAME="color1" SIZE=25"></td>
	  	</tr>
	  	<tr>
	  		<!-- Se crea variable color 2 para ingresar datos -->
		    	<td ALIGN="LEFT">Color 2:</td>
		    	<td ALIGN="RIGHT" COLSPAN="3"><input TYPE="TEXT" NAME="color2" SIZE=25"></td>
	  	</tr>
	  </table><hr><br>
	  <!-- Botones -->
	  <input TYPE="SUBMIT" value ="Enviar"> <input TYPE="RESET">
	  </form>
	  </center>
	  </body>
</html>

