<?php

	/*
		Clase UsuarioPH: define las propiedades y métodos 
		correspondientes a un usuario de determinada 
		propiedad horizontal
	*/
		abstract class UsuarioPH
		{

			//Atributos 
			protected $identificacion;
			protected $primerNombre;
			protected $segundoNombre;
			protected $primerApellido;
			protected $segundoApellido;
			
			//Método Constructor
			public function __construct( $identificacion, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido )
			{

				$this -> identificacion 	= $identificacion;
				$this -> primerNombre 		= $primerNombre; 
				$this -> segundoNombre 		= $segundoNombre; 
				$this -> primerApellido 	= $primerApellido;
				$this -> segundoApellido 	= $segundoApellido;	
				
			}//fin constructor

			//Métodos retorno (Get)
			public function getIdentificacion()
			{

				return $this -> identificacion;

			}

			public function getPrimerNombre()
			{

				return $this -> primerNombre;				

			}
			
			public function getSegundoNombre()
			{

				return $this -> segundoNombre;				

			}

			public function getPrimerApellido()
			{

				return $this -> primerApellido;

			}
			
			public function getSegundoApellido()
			{

				return $this -> segundoApellido;

			}

			public function getTipoInmueble()
			{

				return $this -> tipoInmueble;

			}

			public function getTipoVehiculo()
			{

				return $this -> tipoVehiculo;

			}

			public function getTipoMascota()
			{

				return $this -> tipoMascota;

			}

			public function getTelefonoFijo()
			{

				return $this -> telefonoFijo;

			}

			public function getTelefonoCelular()
			{

				return $this -> telefonoCelular;

			}

			public function getEmail()
			{

				return $this -> email;

			}

			public function getPassword()
			{

				return $this -> password;

			}
			
			public function getNumIntCasa()
			{
				
				return $this -> numIntCasa;
				
			}
			
			public function getNumApart()
			{
				
				return $this -> numApart;
				
			}
			
			public function getPlaca()
			{
				
				return $this -> placa;
				
			}
			
			public function getCantVehiculos()
			{
				
				return $this -> cantVehiculos;
				
			}
			
			public function getCantAnimal()
			{
				
				return $this -> cantAnimal;
				
			}
			
			

			//Métodos modificación (Set)
			public function setIdentificacion($identificacion)
			{

				$this -> identificacion = $identificacion;

			}

			public function setPrimerNombre( $primerNombre )
			{

				$this -> primerNombre = $primerNombre;				

			}
			
			public function setSegundoNombre( $segundoNombre )
			{

				$this -> segundoNombre = $segundoNombre;				

			}

			public function setPrimerApellido($primerApellido)
			{

				$this -> primerApellido = $primerApellido;

			}
			
			public function setSegundoApellido($segundoApellido)
			{

				$this -> segundoApellido = $segundoApellido;

			}

			public function setTipoInmueble($tipoInmueble)
			{

				$this -> tipoInmueble = $tipoInmueble;

			}

			public function setTipoVehiculo($tipoVehiculo)
			{

				$this -> tipoVehiculo = $tipoVehiculo;

			}

			public function setTipoMascota($tipoMascota)
			{

				$this -> tipoMascota = $tipoMascota;

			}

			public function setTelefonoFijo($telefonoFijo)
			{

				$this -> telefonoFijo = $telefonoFijo;

			}

			public function setTelefonoCelular($telefonoCelular)
			{

				return $this -> telefonoCelular;

			}

			public function setEmail($email)
			{

				return $this -> email = $email;

			}

			public function setPassword($password)
			{

				return $this -> password = $password;
				
			}
			
			public function setNumIntCasa( $numIntCasa )
			{
				
				$this -> numIntCasa = $numIntCasa;
				
			}
			
			public function setNumApart( $numApart )
			{
				
				$this -> numApart = $numApart;
				
			}
			
			public function setPlaca( $placa )
			{
				
				$this -> placa = $placa;
				
			}
			
			public function setCantVehiculos( $cantVehiculos )
			{
				
				$this -> cantVehiculos = $cantVehiculos;
				
			}
			
			public function setCantAnimal( $cantAnimal )
			{
				
				$this -> cantAnimal = $cantAnimal;
				
			}


			//Métodos de proceso:
			
			/*
				El método abstracto 'registrarUsuario' permitirá
				acceder a una base de datos y registrar los datos 
				contenidos en los objetos que se instancien de una clase.
			*/
			public abstract function registrarUsuario(UsuarioPH $usuario);	


		}//Fin clase UsuarioPH
?>