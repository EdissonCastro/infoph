<?php

	include('arrendatarioclass.php');


	$id = "1024541781";
	$nombres = "Edisson Arley";
	$apellidos = "Castro Toro";
	$tipoInmueble = "Casa";
	$tipoVehiculo = "Carro";
	$telFijo = "7908838";
	$telCelular = "3219282213";
	$correo = "edissoncastro11@hotmail.com";
	$password = "clavecita";

	$objetoPrueba = new Arrendatario($id, $nombres, $apellidos, $tipoInmueble,
								  $tipoVehiculo, $telFijo, $telCelular, $correo,
								  $password);

	$objetoPrueba -> registrarUsuario( $objetoPrueba );

/*
	$informacion = $objetoPrueba -> getIdentificacion() . "<br>" .
				   $objetoPrueba -> getNombres() . "<br>" . 
				   $objetoPrueba -> getApellidos() . "<br>" .
				   $objetoPrueba -> getTipoInmueble() . "<br>" . 
				   $objetoPrueba -> getTipoVehiculo() . "<br>" .
				   $objetoPrueba -> getTelefonoFijo() . "<br>" .
				   $objetoPrueba -> getTelefonoCelular() . "<br>" .
				   $objetoPrueba -> getEmail() . "<br>" . 
				   $objetoPrueba -> getPassword() . "<br>";

	echo $informacion;

*/
	

?>