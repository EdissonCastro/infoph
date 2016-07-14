function validarTipoInmueble(){

	var primerCampo  = document.getElementById("campoAd1");
	var segundoCampo = document.getElementById("campoAd2");
	var tercerCampo  = document.getElementById("campoAd3");
	var desplegableInmueble = document.forms[0].elements[5];
	
	switch( desplegableInmueble.value )
	{
		case 'casa':			

			primerCampo.innerHTML = "<input type='Number' id='numIntCasa' name='numIntCasa' placeholder='Casa N°'/>";
			segundoCampo.innerHTML = "";
			
		break;

		case 'apartamento':

			primerCampo.innerHTML = "<input type='Number' id='numIntCasa' name='numIntCasa'" +
			"placeholder='Interior N°'/>";
			segundoCampo.innerHTML = "<input type='Number' id='numApart' name='numApart'" +
			" placeholder='Apartamento N°'/>";
			
		break;

		default:

			primerCampo.innerHTML  = "";
			segundoCampo.innerHTML = "";				
			mensaje = "Error: No ha seleccionado un tipo de inmueble ";
			alert( mensaje );			
			desplegableInmueble.focus();
		break;

	}// fin switch


}// fin función validarTipoInmueble

function validarTipoVehiculo(){
	
	var tercerCampo  = document.getElementById("campoAd3");
	var cuartoCampo  = document.getElementById("campoAd4");
	var desplegableVehiculo = document.forms[0].elements[6];

	switch( desplegableVehiculo.value )
	{
		case 'carro':

			tercerCampo.innerHTML = "<input type='text' id='placa' name='placa' placeholder='Placa N°'/>";				

		break;

		case 'motocicleta':

			tercerCampo.innerHTML = "<input type='text' id='placa' name='placa' placeholder='Placa N°'>";
			
			
			
		break;
		
		case 'bicicleta':		
			
			tercerCampo.innerHTML = "";
			cuartoCampo.innerHTML = "";
			
		break; 
		
		
		case 'ninguno':
			tercerCampo.innerHTML = "";
			cuartoCampo.innerHTML = "";			
		break;
		
		
		default:

			tercerCampo.innerHTML = "";
			cuartoCampo.innerHTML = "";			
			mensaje = "Error: No ha seleccionado un tipo de vehículo. ";
			alert( mensaje );
			desplegableVehiculo.focus();

		break;


	}

}// Fin validarTipoVehiculo

function validarTipoMascota(){	
	
	var quintoCampo  = document.getElementById("campoAd5");
	var desplegableMascota = document.forms[0].elements[7];
	
	switch( desplegableMascota.value )
	{
		case 'perro':

			quintoCampo.innerHTML = "<input type='Number' id='cantAnimal' name='cantAnimal'" +
			"placeholder='Cantidad de perros' />";		

		break;

		case 'gato':
			
			quintoCampo.innerHTML = "<input type='Number' id='cantAnimal' name='cantAnimal'" +
			"placeholder='Cantidad de gatos' />";
			
			
		break;
		
		case 'otro':
		
			quintoCampo.innerHTML = "<input type='Number' id='cantAnimal' name='cantAnimal'" +
			"placeholder='Cantidad de otros animales' />";
			
			
		break;
		
		case 'ninguno':
			quintoCampo.innerHTML = "";
		break;

		default:

			quintoCampo.innerHTML = "";
			mensaje = "Error: no ha seleccionado un tipo de mascota";			
			alert( mensaje );
			desplegableMascota.focus();
			
		break;


	}

}// Fin validarTipoMascota
