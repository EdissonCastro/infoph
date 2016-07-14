<?php

		// La función obtiene los datos ingresados desde el formulario:
		function capturarDatos(){
			
			// Captura de datos:
			global $id, $primNombre, $segundoNom, $primApellido, $segApellido;
			global $tipoInmueble, $tipoVehiculo, $tipoMascota, $telFijo, $telCelular;
			global $email, $password, $num_int_casa, $numApart, $placa, $cantMascotas;
			
			$id 		  = $_POST['identificacion'];	
			$primNombre   = $_POST['primNombre'];
			$segundoNom   = $_POST['segNombre'];
			$primApellido = $_POST['primApellido'];
			$segApellido  = $_POST['segApellido'];		
			$tipoInmueble = $_POST['tipoInmueble'];
			$tipoVehiculo = $_POST['tipoVehiculo'];
			$tipoMascota  = $_POST['tipoMascota'];
			$telFijo 	  = $_POST['telefonoFijo'];
			$telCelular   = $_POST['telefonoCelular'];
			$email 		  = $_POST['correoElectronico'];
			$password 	  = $_POST['clave'];
			
			
			
			// Validación de desplegables y campos creados dinámicamente:
			if( isset( $_POST['numIntCasa']) ){ $num_int_casa = $_POST['numIntCasa']; }	
			if( isset( $_POST['numApart'] ) ){ $numApart = $_POST['numApart']; }			
			if( isset( $_POST['placa'] ) ){ $placa = $_POST['placa']; }
			if( isset( $_POST['cantAnimal'] )  ){ $cantMascotas = $_POST['cantAnimal']; }
			
			
		}// Fin capturarDatos
		
		
		// Registra los datos correspondientes a la tabla especificada	
		function registrarDatos( array $datos, $tabla, array $atributos ){
				
			// Conecto con base de datos:
			$conexion = new mysqli("localhost", "root", "", "infophbd");
			
			if( $conexion->connect_errno )
			{
				echo("Error de conexión: {$conexion->connect_error}");
			}
			else
			{
				$cadena_consulta = "INSERT INTO $tabla(";

				for( $i = 0; $i < sizeof( $atributos ); $i++ )
				{
					if( $i == ( sizeof( $atributos ) - 1 ) ){ $cadena_consulta .= "$atributos[$i])"; } 
					else{ $cadena_consulta .= $atributos[$i] . ", "; }				
				}
				
				$cadena_consulta .= " VALUES(";
				
				for( $j = 0; $j < sizeof( $datos ); $j++ )
				{
					if( $j == ( sizeof( $datos ) - 1 ) ){ $cadena_consulta .= "'$datos[$j]');"; } 
					else{ $cadena_consulta .= "'$datos[$j]', "; }				
				}	
				
				
				if( !( $conexion->query( $cadena_consulta ) )  ) echo $conexion->error;
					
			}
			
		}// Fin registrarDatosPersonales
		
		
		
		
		// Devuelve true si el campo está diligenciado, false de otro modo.		
		function estaDiligenciado( $campo )
		{
			$respuesta = true;
			
			if( $campo == "" ){ $respuesta = false; }
			
			return $respuesta;
		}// Fin estaDiligenciado
?>