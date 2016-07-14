<html>
<head>
	<title>Reportes de usuario</title>
	<meta charset="utf-8"/>
	<link  href="css/estilo_form2.css" rel="stylesheet" type="text/css">
	<link href="estilotablas.css" rel="stylesheet">
	<script src="reportar.js"></script>
	<?php include("index.php"); ?>
</head>
<body>
	<?php
		
		$conexion = new mysqli("localhost", "root", "", "infophbd");
		
		if( $conexion->connect_errno )
		{
			echo("Error de conexión: " . $conexion->connect_error );
		}
		
		
		// Toma de datos del formulario:
		$documento = $_POST['documento'];
		
		// Verificar el tipo de usuario:
		$sentencia = "SELECT usuario FROM persona WHERE identificacion = '$documento';";
		
		$resultado = $conexion->query( $sentencia );		
		$usuario = $resultado->fetch_assoc();
		
		
		
		switch( $usuario['usuario'] )
		{
			case 1:
			case 2:

				// Verifico si esa persona tiene apartamento o casa:
				$sentencia2 = "SELECT * FROM apartamento WHERE persona = '$documento';";				
				$datos = $conexion->query($sentencia2);
				
				// Si $datos es null, la persona no posee apartamento
				if( is_null( $datos->fetch_assoc() ) )
				{
					$sentencia3 = "SELECT num_registro FROM casa WHERE persona = '$documento';";
					$result = $conexion->query($sentencia3);
					$datos = $result->fetch_assoc();
					
					if( is_array( $datos ) )
					{
						// Si el resultado es un array, consulto el saldo correspondiente a la casa:
						$sentencia4 = "SELECT fecha_ingreso, monto, num_casa FROM saldocasa INNER JOIN casa ON casa = '1' AND casa.num_registro = '1';";
						$result2 = $conexion->query( $sentencia4 );
						$datos2 = $result2->fetch_assoc();
						
						if( is_array( $datos2 ) )
						{
							echo("
								<center>
									
										<table>	
											<tr><th colspan='6'>Reporte de saldos</th></tr>
											<tr>
												<th>Fecha de registro</th>
												<th>Monto</th>	
												<th>Número de casa</th>
											</tr>

											<tr>		
										
							");
							
							foreach( $datos2 as $valor )
							{
								echo("<td>$valor</td>");
							}
							
							echo("</tr></table></center>");
							
						}// Fin if
						
					}// Fin if						
					
				}// Fin if
				else{
					
					$sentencia3 = "SELECT num_registro FROM apartamento WHERE persona = '$documento';";
					$result = $conexion->query($sentencia3);
					$datos = $result->fetch_assoc();
					
					if( is_array( $datos ) )
					{
						// Si el resultado es un array, consulto el saldo correspondiente al apartamento:
						$sentencia4 = "SELECT fecha_ingreso, monto, num_apartamento FROM saldoapartamento INNER JOIN apartamento ON apartamento = '1' AND apartamento.num_registro = '1';";
						$result2 = $conexion->query( $sentencia4 );
						$datos2 = $result2->fetch_assoc();
						
						if( is_array( $datos2 ) )
						{
							echo("
								<center>
									
										<table>	
											<tr><th colspan='6'>Reporte de saldos</th></tr>
											<tr>
												<th>Fecha de registro</th>
												<th>Monto</th>	
												<th>Número de apartamento</th>
											</tr>

											<tr>		
										
							");
							
							foreach( $datos2 as $valor )
							{
								echo("<td>$valor</td>");
							}
							
							echo("</tr></table></center>");
							
						}// Fin if
						
					}// Fin if
					
				}
					
				echo("					  
					</table>				
				</center>
				");
				
			break;	
			
			case 3:	

				
				
				echo
				(
					"
						<center>
						<table>
							<tr>
								<th colspan='2' >Censo de personas registradas</th>								
							</tr>					
							
							<tr>
								<th>Propietarios</th>
								<th>Arrendatarios</th>
								
				");
				$propietario = 1;
				$arrendatario = 2;
				
				$cons = "SELECT count(*) FROM persona WHERE usuario = '$propietario';";
				$resultado = $conexion->query( $cons );
				$cantidadPropietarios = $resultado->fetch_assoc();
				
				$cons2 = "SELECT count(*) FROM persona WHERE usuario = '$arrendatario';";
				$resultado2 = $conexion->query( $cons2 );
				$cantidadArrendatarios = $resultado2->fetch_assoc();
				
				if(is_array($cantidadPropietarios)){
					echo "<tr><td>".$cantidadPropietarios['count(*)']."</td>";
					
					if(is_array($cantidadArrendatarios)){
						echo "<td>".$cantidadArrendatarios['count(*)']."</td></tr>";
					}
				}
				
				echo("</tr>
				</table>
				
				<br/><br/>
						
					<table>
						<tr>
							<th colspan='3'>Censo de mascotas registradas</th>
						</tr>
						
						<tr>
							<th>Perros</th>
							<th>Gatos</th>
							<th>Otros</th>
						</tr>
				
				");
				
				$cons3 = "SELECT count(*) FROM mascota WHERE tipo_mascota = 'perro';";
				$resultado3 = $conexion->query( $cons3 );
				$cantidadPerros = $resultado3->fetch_assoc();
				
				if(is_array($cantidadPerros)){
					echo "<tr><td>".$cantidadPerros['count(*)']."</td>";
				}
				
				$cons4 = "SELECT count(*) FROM mascota WHERE tipo_mascota = 'gato';";
				$resultado4 = $conexion->query( $cons4 );
				$cantidadGatos = $resultado4->fetch_assoc();
				
				if(is_array($cantidadGatos)){
					echo "<td>".$cantidadGatos['count(*)']."</td>";
				}
				
				$cons5 = "SELECT count(*) FROM mascota WHERE tipo_mascota = 'otro';";
				$resultado5 = $conexion->query( $cons5 );
				$cantidadOtro = $resultado5->fetch_assoc();
				
				if(is_array($cantidadOtro)){
					echo "<td>".$cantidadOtro['count(*)']."</td></tr>";
				}
						
				echo ("
						</table>
						
						<br/><br/>
						
						<table>
							<tr>
								<th colspan='2'>Censo de vehículos registrados</th>
							</tr>
							
							<tr>
								<th>Carros</th>
								<th>Motocicletas</th>
							</tr>
					");	
					
				$cons6 = "SELECT count(*) FROM vehiculo WHERE tipo_vehiculo = 'carro';";
				$resultado6 = $conexion->query($cons6);
				$cantCarros = $resultado6->fetch_assoc();
				
				if(is_array($cantCarros)){
					echo "<tr><td>".$cantCarros['count(*)']."</td>";
				}
				
				$cons7 = "SELECT count(*) FROM vehiculo WHERE tipo_vehiculo = 'motocicleta';";
				$resultado7 = $conexion->query($cons7);
				$cantMotos = $resultado7->fetch_assoc();
				
				if(is_array($cantMotos)){
					echo "<td>".$cantMotos['count(*)']."</td></tr>";
				}
				
				echo "</table></center>";				
			break;
			
			default:
				echo "No hay usuario";
			break;
			
		}// Fin switch
		
		
		
		
		
		
	?>
	
	<div id="div01"></div></center>
	
</body>
</html>