// Declaración de variables globales:
var mensaje = "", continuar = true;		
var expRegNom = /^[A-Z|a-z][a-z]*[a-z]$/i;

function validarForm(){
	
	var desplegable1, desplegable2, desplegable3, formulario;
	var formCorrecto = true;
	
	desplegable1 = document.forms[0].elements[5];
	desplegable2 = document.forms[0].elements[6];
	desplegable3 = document.forms[0].elements[7];
	formulario   = document.forms[0];
	
	for( var i = 0; i < formulario.elements.length; i++ )	
	{
		switch ( i ) 
		{
			case 0:
			
				if( campoVacio( formulario.elements[i] ) )
				{
					validarIdentificacion();
					formCorrecto = false;
					i = formulario.elements.length - 1;
				}
				
			break;
			
			case 1:
			
				if( campoVacio( formulario.elements[i] ) )
				{
					validarPrimerNombre();	
					formCorrecto = false;					
					i = formulario.elements.length - 1;
				}
				
			break;
			
			case 2:
			
				if( !campoVacio( formulario.elements[i] ) )
				{
					validarSegundoNombre();
					formCorrecto = false;
					i = formulario.elements.length - 1;
				}	
				
			break;
			
			case 3:
			
				if( campoVacio( formulario.elements[i] ) )
				{
					validarPrimerApellido();
					formCorrecto = false;
					i = formulario.elements.length - 1;
				}
				
			break;
			
			case 4:
			
				if( !campoVacio( formulario.elements[i] ) )
				{
					validarSegundoApellido();
					formCorrecto = false;
					i = formulario.elements.length - 1;
				}
			
			break;
			
			case 5:
				
				if( formulario.elements[i].value == 0 )
				{
					validarTipoInmueble();
					formCorrecto = false;
					i = formulario.elements.length - 1;
				}
			
			break;
			
			case 6:
			
				if( formulario.elements[i].value == 0 )
				{
					validarTipoVehiculo();
					formCorrecto = false;
					i = formulario.elements.length - 1;
				}
			
			break;
			
			case 7:
			
				if ( formulario.elements[i].value == 0 )
				{
					validarTipoMascota();
					formCorrecto = false;
					i = formulario.elements.length - 1;
				}
			
			break;
			
			case 8:
			
				if( !campoVacio( formulario.elements[i] ) ) 
				{
					validarTelFijo();
					formCorrecto = false;
					i = formulario.elements.length - 1;
				}
			
			break;
			
			case 9:
			
				if( campoVacio( formulario.elements[i] ) ) 
				{
					validarTelCel();
					formCorrecto = false;
					i = formulario.elements.length - 1;
				}
			
			break;
			
			case 10:
			
				if( campoVacio( formulario.elements[i] ) ) 
				{
					validarEmail();
					formCorrecto = false;
					i = formulario.elements.length - 1;
				}
			
			break;
			
			case 11, 12:
			
				if( campoVacio( formulario.elements[11] ) && campoVacio( formulario.elements[12] ) ) 
				{
					validarClaves();
					formCorrecto = false;
					i = formulario.elements.length - 1;
				}
			
			break;
			
			case '12':
			break;
			
		}
	}
	
	return formCorrecto;
	
}// Fin función validarForm

function validarIdentificacion(){
	
	var expRegId    = /^[0-9]{8,10}$/;
	var idUsuario = document.forms[0].elements[0];	


	if( campoVacio( idUsuario ) )
	{
		idUsuario.focus();
		mensaje = "Error: diligencie el campo \"" + idUsuario.placeholder + "\"";
		alert( mensaje );
		
	}
	else if( !expRegId.test( idUsuario.value ) )
	{
		idUsuario.focus();
		mensaje = "Error: el valor en el campo \"" + idUsuario.placeholder +
		"\" debe contener de ocho a diez números sin espacios entre ellos";
		alert( mensaje );
		
	}	

}// fin función validarIdentificacion

function validarPrimerNombre(){	
	
	var primerNombre = document.forms[0].elements[1];
	var conversion;
	
	if( campoVacio( primerNombre ) ) 
	{		
		primerNombre.focus();
		mensaje = "Error: diligencie el campo \"" + primerNombre.placeholder + "\"";	
		alert( mensaje );
	}
	else 			
	{	
		if( !expRegNom.test( primerNombre.value ) )
		{			
			primerNombre.focus();
			mensaje = "Error: el campo \"" + primerNombre.placeholder +
			"\" sólo admite letras sin espacios ni signos de puntuación.";
			alert( mensaje );
			
		}		
		else
		{
			conversion = primerNombre.value.toLowerCase();
			primerNombre.value = conversion;			
		}		
	}	 	
	
}// fin función validarPrimerNombre

function validarSegundoNombre(){
	
	var segundoNombre = document.forms[0].elements[2];
	
	if( !campoVacio( segundoNombre ) ){
		
		if( !expRegNom.test( segundoNombre.value ) )
		{
			segundoNombre.focus();
			mensaje = "Error: el campo \"" + segundoNombre.placeholder +
			"\" sólo admite letras sin espacios ni signos de puntuación.";
			alert( mensaje );
		}
		else
		{
			conversion = segundoNombre.value.toLowerCase();
			segundoNombre.value = conversion;			
		}
	}		
	
}// Fin función validarSegundoNombre

function validarPrimerApellido(){
	
	var primerApellido = document.forms[0].elements[3];
	
	if( !campoVacio( primerApellido ) ){
		
		if( !expRegNom.test( primerApellido.value ) )
		{
			primerApellido.focus();
			mensaje = "Error: el campo \"" + primerApellido.placeholder +
			"\" sólo admite letras sin espacios ni signos de puntuación.";
			alert( mensaje );
		}
		else
		{
			conversion = primerApellido.value.toLowerCase();
			primerApellido.value = conversion;			
		}
	}	
	
}// Fin validarPrimerApellido

function validarSegundoApellido(){
	
	var segundoApellido = document.forms[0].elements[4];
	
	if( !campoVacio( segundoApellido ) ){
		
		if( !expRegNom.test( segundoApellido.value ) )
		{
			segundoApellido.focus();
			mensaje = "Error: el campo \"" + segundoApellido.placeholder +
			"\" sólo admite letras sin espacios ni signos de puntuación.";
			alert( mensaje );
		}
		else
		{
			conversion = segundoApellido.value.toLowerCase();
			segundoApellido.value = conversion;			
		}
	}
	
}

function opcionSeleccionada( desplegable ){
	
	var seleccionada = false;
	
	if( desplegable.value == '0' ) seleccionada = true;
	
	return seleccionada;
	
}// Fin opcionSeleccionada

function validarTelFijo(){	
	
	var campoTelFijo = document.forms[0].elements[8];	
	var expTelFijo = /^[0-9]{7}$/;	
	
	if( !campoVacio( campoTelFijo ) )
	{
		if( !expTelFijo.test( campoTelFijo.value ) )
		{
			campoTelFijo.focus();
			mensaje = "Error: introduzca un valor numérico de 7 digitos";
			alert( mensaje );
		}		
	}
	
}// Fin validarTelFijo

function validarTelCel(){
	
	var expTelCel = /^[0-9]{10}$/;	
	var telefonoCel = document.forms[0].elements[9];

		
	if( campoVacio( telefonoCel ) )
	{
		telefonoCel.focus();
		mensaje = "Error: introduzca un número de celular";
		alert( mensaje );
	}
	else if( !expTelCel.test( telefonoCel.value ) )
	{
		telefonoCel.select();
		mensaje = "Error: introduzca un valor numérico de 10 dígitos";
		alert( mensaje );
	}
		
    
}// Fin función validarTelCel
function validarEmail(){
	
	var campoEmail = document.forms[0].elements[10];
	var expReg     = /^[a-z]\W*\w*\W*\w*@\w+/;
	
	if( campoVacio( campoEmail ) ) 
	{
		campoEmail.focus();
		mensaje = "Error: diligencie el campo \"" + campoEmail.placeholder + "\"";
		alert( mensaje );
	}
	else if( !expReg.test( campoEmail.value ) )
	{
		campoEmail.select()
		mensaje = "Error: ingrese una dirección de correo electrónico válida";
		alert( mensaje );
	}
	
}// Fin función validarEmail

function validarPrimerClave(){
	
	var primerClave = document.forms[0].elements[11];
	
	if( campoVacio( primerClave ) )
	{
		primerClave.focus();
		mensaje = "Error: no ha ingresado su contraseña";
		alert( mensaje );
	}
	else if( primerClave.value.length < '8' )
	{
		primerClave.select();
		mensaje = "Error: la contraseña debe contener ocho (8) caracteres como mínimo";
		alert( mensaje );
	}
	
}// Fin validarPrimerClave

function validarSegundaClave(){
	
	var segundaClave = document.forms[0].elements[12];
	
	if( campoVacio( segundaClave ) )
	{
		segundaClave.focus();
		mensaje = "Error: no ha confirmado su contraseña";
		alert( mensaje );
	}
	else if( segundaClave.value.length < '8' )
	{
		segundaClave.select();
		mensaje = "Error: la contraseña debe contener ocho (8) caracteres como mínimo";
		alert( mensaje );
	}
	
}// Fin validarSegundaClave

function validarClaves(){
		
	var clave1, clave2;		
	
	clave1 = document.forms[0].elements[11];
	clave2 = document.forms[0].elements[12];
	
	if( campoVacio( clave1 ) && campoVacio( clave2 ) )
	{
		clave1.select();
		mensaje = "Error: ingrese los campos de contraseña";
		alert( mensaje );		
	}
	else if( clave1.value.localeCompare(clave2.value) != 0 )
	{
		clave1.focus();
		mensaje = "Error: las contraseñas no coinciden, ingreselas nuevamente";
		alert( mensaje );
	}
	
}// Fin función validarClaves


function campoVacio( campo ){
	
	var estaVacio = false; 
	
	if( campo.value.localeCompare("") == 0 ) 
	{
		estaVacio = true;	
	}
	
	return estaVacio;	
} 


