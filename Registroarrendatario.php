<html>

<head>
	<title>Registro de arrendatario</title> 
	<link href="css/Estilo_formularios.css" rel="stylesheet" type="text/css" >
  <script type="text/javascript" src="validacion.js"></script>
  <script type="text/javascript" src="desplegables.js"></script>
  <meta charset="utf-8">
	<?php include("index.php"); ?>
</head>

<body>


<center>
<br><br>    
    
<div class="center">
    <div class="form">
	<form action="arrendatarioreg.php" method="POST" name="formarrendatario">

		<br><br>
		<font face="broadway" size="6" color="#fff"><b>DATOS PERSONALES</b></font>
		<br>
		<font face="verdana" size="5" color="#fff"><b>Registro de arrendatario</b></font>
		<br><br>
		<font face="verdana" size="4" color="#fff">(*) Campos obligatorios.
		<br>

		<!-- Inicio de tabla para el formulario -->
		 <table cellspacing="20"> 

			<tr>
			  <td><input type = "text" name = "identificacion" placeholder = "Número de identificación *"
			  onblur="validarIdentificacion();"></td>
			</tr>

			<tr>
			  <td><input type = "text" name = "primNombre" placeholder = "Primer nombre *"
			  onblur="validarPrimerNombre();"></td>
			
			  <td><input type = "text" name = "segNombre" placeholder = "Segundo nombre"
			  onblur="validarSegundoNombre();"></td>
			</tr>

			<tr>
			  <td><input type = "text" name = "primApellido" placeholder = "Primer apellido *"
			  onblur="validarPrimerApellido();"></td>
			
			  <td><input type = "text" name = "segApellido" placeholder = "Segundo apellido"
			  onblur="validarSegundoApellido();"></td>
			</tr>
		
			
			<tr>
			  <td><select name ="tipoInmueble" onblur="validarTipoInmueble();"
			  onchange="validarTipoInmueble();">
					 <option value="0" id="sinInmueble">Seleccione su tipo de inmueble *</option> 
					 <option value="casa">Casa</option> 
					 <option value="apartamento">Apartamento</option>
				  </select>
			  </td>
			
			  <td>
				  <select name ="tipoVehiculo" onblur="validarTipoVehiculo()"
				  onChange="validarTipoVehiculo();">
					 <option value="0" id="sinVehiculo">Seleccione su tipo de vehículo *</option> 
					 <option value="carro">Carro</option> 
					 <option value="motocicleta">Motocicleta</option>
					 <option value="bicicleta">Bicicleta</option>
					 <option value="ninguno">Ninguno</option>
				  </select>
			  </td>
			</tr>  
			
			<tr>
			  <td>
				<select name ="tipoMascota" onblur="validarTipoMascota();"
				onChange="validarTipoMascota();">
					 <option value="0" id="sinMascota">Seleccione un tipo de mascota *</option> 
					 <option value="perro">Perro</option> 
					 <option value="gato">Gato</option>
					 <option value="otro">Otro</option>
					 <option value="ninguno">Ninguno</option>

				</select>
			  </td>
			
			  <td>
				<input type = "text" name = "telefonoFijo" placeholder = "Teléfono fijo"
				onblur="validarTelFijo();">
			  </td>
			</tr>

			<tr>
			  <td>
				<input type = "text" name = "telefonoCelular" placeholder = "Teléfono celular *"
				onblur="validarTelCel();">
			  </td>

			  <td>
				<input type = "email" name = "correoElectronico" placeholder = "Correo electrónico *"
				onblur="validarEmail();">
			  </td>
			</tr>

			<tr>
			  <td><input type = "password" name = "clave" placeholder = "Clave de acceso *" maxlength= "15"
			  onblur="validarPrimerClave();"></td>
			
			  <td><input type = "password" name = "claveRepetida" placeholder = "Confirme su clave*" maxlength="15"
			  onblur="validarSegundaClave();"></td>
			</tr>


			<tr>
			  <td id="campoAd1"></td>
			   
			  <td id="campoAd3"></td>
			</tr>
			
			<tr>
		   	  <td id="campoAd2"></td>			 
				
			  <td id="campoAd5"></td>
			</tr>
					 
		  </table>
		</font> 

		
		<input id=boton type="submit" value="REGISTRAR">
		  
			
		
	</form>
</div>
</center>
</div>
</body>
</html>