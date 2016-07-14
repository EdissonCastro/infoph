<html>
<head>
	<title>Ingreso</title>
	
    <link  href="css/estilo_formularios.css" rel="stylesheet" type="text/css">
    <?php include("index.php"); ?>

</head>

<?php

	include("usuarioclass.php");
	
	/*
		Clase arrendatario: esta clase hereda o extiende 
		a la clase UsuarioPH; ésto con el fin de implementar
		el método abstracto RegistrarUsuario para acceder a la 
		base de datos y hacer la respectiva consulta que permita
		registrar los diferentes atributos en la tabla arrendatario.
	*/
	class Arrendatario extends UsuarioPH
	{		


		//Método constructor:
		public function __construct( $identificacion, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido )
		{

			parent::__construct( $identificacion, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido);

		}//Fin método constructor

		//Métodos de proceso:

		/*
			
			registrarUsuario() es la implementación del método
			abstracto 'registrarUsuario' de la clase padre 'UsuarioPH'.

			En éste método, se accede a la base de datos determinada
			y se registran los datos que el objeto pasado por parámetros
			contenga en ésta.

		*/
		public function registrarUsuario(UsuarioPH $usuario)
		{
			$arrendatario = 2;

			//Conexión con servidor y seleccion de BD:
			$enlace = new mysqli("localhost", "root", "", "infophbd");

			//Comprobación de conexión:

			if( mysqli_connect_errno() )
			{

				echo("Error al intentar conectarse al servidor: " .
				mysqli_connect_error() );

			}

			//Definición de variables con valor de consulta:
			$instruccionSQL = "INSERT INTO persona 
			VALUES('{$usuario -> identificacion}', '{$usuario -> primerNombre}', '{$usuario -> segundoNombre}', '{$usuario -> primerApellido}', '{$usuario -> segundoApellido}', '$arrendatario' ); ";	

			

			//Realización de consulta: 
			if( $enlace->query( $instruccionSQL) === TRUE  )
			{				
				 echo "	<b>REGISTRO EXITOSO</b>";    
			}

			else
			{
				echo("Error en el registro: (" . mysqli_error($enlace) . ")");
			}

			//Cierre de la conexión: 
			mysqli_close($enlace);

		}

	}//Fin clase Propietario



?>

</body>
</html>