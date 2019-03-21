<?php
	$nombre = $_POST['nombre'];
	$apaterno = $_POST['apaterno'];
	$amaterno = $_POST['amaterno'];
	$correo = $_POST['correoe'];

	echo "Su nombre es: ".$nombre;
	echo "<br />Su apellido paterno es: ".$apaterno;
	echo "<br />Su apellido materno es: ".$amaterno;
	echo "<br />Su correo electronico es:  ".$correo;

?>

<html>
   <body>
       <a href = "ejercicio.html"> clic aqui para volver</a>
   </body>
</html>
