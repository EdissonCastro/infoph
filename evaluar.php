<?php

	function evaluarValores()
	{
		// Evaluación de valores pasados por formulario.	
		global $id, $primNombre, $segundoNom, $primApellido;
		global $segApellido, $tipoInmueble, $tipoVehiculo;
		global $tipoMascota, $telFijo, $telCelular;
		global $correo, $password, $casaOIntNum;
		global $numApart, $placa, $cantVehiculos, $cantMascotas; 
			
		
		if( !isset( $_POST['identificacion'] ) ){ $id = "ninguno";  }		
		else{   $id = $_POST['identificacion']; }
		
		if( !isset( $_POST['primNombre'] ) ){ $primNombre = "ninguno"; }
		else{   $primNombre = $_POST['primNombre']; }
		
		if( !isset( $_POST['segNombre'] ) ){ $segundoNom = "ninguno"; }
		else{   $segundoNom = $_POST['segNombre']; }
		
		if( !isset( $_POST['primApellido'] ) ){ $primApellido = "ninguno"; }
		else{   $primApellido = $_POST['primApellido']; }
		
		if( !isset( $_POST['segApellido'] ) ){  $segApellido = "ninguno"; }
		else{  $segApellido = $_POST['segApellido']; }
		
		if( !isset( $_POST['tipoInmueble'] ) ){  $tipoInmueble = "ninguno"; }
		else{  $tipoInmueble = $_POST['tipoInmueble']; }
		
		if( !isset( $_POST['tipoVehiculo'] ) ){  $tipoVehiculo = "ninguno"; }
		else{  $tipoVehiculo = $_POST['tipoVehiculo']; }
		
		if( !isset( $_POST['tipoMascota'] ) ){  $tipoMascota = "ninguno"; }
		else{  $tipoMascota = $_POST['tipoMascota']; }
		
		if( !isset( $_POST['telefonoFijo'] ) ){  $telFijo = "ninguno"; }
		else{  $telFijo = $_POST['telefonoFijo']; }
		
		if( !isset( $_POST['telefonoCelular'] ) ){  $telCelular = "ninguno"; }
		else{  $telCelular = $_POST['telefonoCelular']; }
		
		if( !isset( $_POST['correoElectronico'] ) ){  $correo = "ninguno"; }
		else{ $correo = $_POST['correoElectronico']; }
		
		if( !isset( $_POST['clave'] ) ){  $password = "ninguno"; }
		else{  $password = $_POST['clave']; }
		
		if( !isset( $_POST['numIntCasa'] ) ){  $casaOIntNum = "ninguno"; }
		else{  $casaOIntNum = $_POST['numIntCasa']; }
		
		if( !isset( $_POST['numApart'] ) ){  $numApart = "ninguno"; }
		else{  $numApart = $_POST['numApart']; }
		
		if( !isset( $_POST['placa'] ) ){  $placa = "ninguno"; }		
		else{  $placa = $_POST['placa']; }
		
		if( !isset( $_POST['cantVehiculos'] ) ){  $cantVehiculos = 0; }
		else{  $cantVehiculos = $_POST['cantVehiculos']; }		
		
		if( !isset( $_POST['cantAnimal'] ) ){  $cantMascotas = 0; }
		else{  $cantMascotas  = $_POST['cantAnimal']; }	
	
	}// Fin evaluarValores
?>