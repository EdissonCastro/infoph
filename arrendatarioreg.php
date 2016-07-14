<!DOCTYPE html>
<html>
<head>
	<title>Registro de propietario</title>
	<meta charset='utf-8'/>
</head>
<body>
	<?php
	
		include("funciones.php");
		include("arrendatarioclass.php");
		
	
		// Declaración de variables con ámbito global
		$id;	
		$primNombre;
		$segundoNom;
		$primApellido;
		$segApellido; 	
		$tipoInmueble;
		$tipoVehiculo;
		$tipoMascota;
		$telFijo;
		$telCelular;
		$email;
		$password;
		$num_int_casa;		
		$numApart;
		$placa;
		$cantMascotas;
		
		
		
		// Esta llamada a función inicializará las variables anteriores.
		capturarDatos();
		
		// Registramos datos personales únicamente
			$arrendatario = new Arrendatario( $id, $primNombre, $segundoNom, $primApellido,
			$segApellido);			
			$arrendatario -> registrarUsuario( $arrendatario );
		
		
			
		
		// Valido si el usuario posee casa:
		if( is_null( $numApart ) )
		{ 
		
			// Selecciono campos y valores para registrar el inmueble(casa)
			$datosCasa = array( $num_int_casa, $id );	
			$tablaCasa = "casa";	
			$campos_registrar_casa = array( "num_casa", "persona" );
			// Registro la casa:
			registrarDatos( $datosCasa, $tablaCasa, $campos_registrar_casa );		
		}
		else
		{
			// Si $numApart no es nula, es porque el usuario posee un apartamento
			
			// Selecciono campos y valores para registrar el inmueble(apartamento)
			$datosApartamento = array( $numApart, $id, $num_int_casa );	
			$tablaApartamento = "apartamento";	
			$campos_registrar_apartamento = array( "num_apartamento", "persona", "num_torre" );
			
			// Registro el apartamento:
			registrarDatos( $datosApartamento, $tablaApartamento, $campos_registrar_apartamento );
		}
		
		// Verifico el tipo de vehículo que posee el usuario:
		if( $tipoVehiculo == "carro" || $tipoVehiculo == "motocicleta" )
		{
			// Selecciono campos y valores para registrar el vehículo
			$datosVehiculo = array( $tipoVehiculo, $placa, $id );
			$tablaVehiculo = "vehiculo";
			$campos_registrar_vehiculo = array( "tipo_vehiculo", "placa", "propietario_vehiculo" );
			
			// Registro el vehículo:
			registrarDatos( $datosVehiculo, $tablaVehiculo, $campos_registrar_vehiculo );
		}
		
		// Verifico el tipo de mascota que posee el usuario:
		if( $tipoMascota == "perro" || $tipoMascota == "gato" || $tipoMascota == "otro" )
		{
			// Selecciono campos y valores para registrar la mascota
			$datosMascota = array( $tipoMascota, $cantMascotas, $id );
			$tablaMascota = "mascota";
			$campos_registrar_mascota = array( "tipo_mascota", "cantidad", "propietario_mascota" );
			
			// Registro la mascota:
			registrarDatos( $datosMascota, $tablaMascota, $campos_registrar_mascota );
		}
		
		// Valido si el campo 'Telefono fijo' fué diligenciado
		if( estaDiligenciado( $telFijo ) )
		{
			// Selecciono campos y valores para registrar los teléfonos
			$datosTelefonos = array( $telFijo, $telCelular, $id );
			$tablaTelefono = "telefono";
			$campos_registrar_telefono = array( "telefonoFijo", "telefonoCelular", "persona" );
			
			// Registro los teléfonos:
			registrarDatos( $datosTelefonos, $tablaTelefono, $campos_registrar_telefono );			
		}
		else{
			// Selecciono campos y valores para registrar los teléfonos
			$datosTelefonos = array( NULL, $telCelular, $id );
			$tablaTelefono = "telefono";
			$campos_registrar_telefono = array( "telefonoFijo", "telefonoCelular", "persona" );
			
			// Registro los teléfonos:
			registrarDatos( $datosTelefonos, $tablaTelefono, $campos_registrar_telefono );
		}
		
		// Selecciono campos y valores para registrar el e-mail
		$datosEmail = array( $email, $id );
		$tablaEmail = "email";
		$campos_registrar_email = array( "email", "persona_identificacion" );
		
		// Registro el email:
		registrarDatos( $datosEmail, $tablaEmail, $campos_registrar_email );
		
		
		
		// Selecciono campos y valores para registrar la contraseña
		$datosClave = array( $password, $id );
		$tablaClave = "clave";
		$campos_registrar_clave = array( "clave", "persona_identificacion" );
		
		// Registro la contraseña:
		registrarDatos( $datosClave, $tablaClave, $campos_registrar_clave );		
	?>
</body>
</html>