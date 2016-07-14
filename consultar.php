<HTML>
<HEAD>
	<TITLE>InfoPH - Parques de castilla</TITLE>
	<META CHARSET="utf-8">
</HEAD>

<BODY>

<?php

	/*
		consultar.php: 

		Este Script realiza una consulta en la base de datos con el 
		fin de verificar la existencia de un usuario de la Propiedad
		Horizontal dentro de la misma, para así facilitar el proceso
		de ingreso al sistema de información.
	*/

	//Toma de datos del formulario:
	$identificacion = $_POST['idUsuario'];
	$clave 			= $_POST['clave'];


	//Conexión con BD: 

	$conexionMySQL = new mysqli("localhost", "root", "", "infophbd");

	//Validación de conexión:

	if($conexionMySQL->connect_errno)
	{

		echo("Error de conexion: " . $conexionMySQL-> connect_error );

	}

	$instruccionSQL1 = "SELECT clave FROM clave WHERE persona_identificacion = '$identificacion';";

	
	$resultadoConsulta = $conexionMySQL->query( $instruccionSQL1 );
	
	
	$arr = $resultadoConsulta->fetch_assoc();
	
	if($arr['clave'] == $clave)
	{
		$consulta = "SELECT primerNombre, primerApellido FROM persona WHERE identificacion = '$identificacion';";
		
		$resultado2 = $conexionMySQL->query( $consulta );
		
		$arr2 = $resultado2->fetch_assoc();
		include("consultas.php");
		echo("¡Bienvenido, " . $arr2['primerNombre'] . " " . $arr2['primerApellido'] . "!");
	}
		
	
?>

<BR />
<BR />

</BODY>
</HTML>