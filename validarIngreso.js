var mensaje = "";

function validarFormIngreso(){
	
	var enviar = true; 
	
	validarId();
	validarClave();	
	
	if( mensaje != "" ) enviar = false;
	
	return enviar;
	
}// Fin validarFormIngreso

function validarId(){
	
	var campoId = document.forms[0].elements[0];
	
	if( campoId.value == "" )
	{
		mensaje = "Error: Ingrese su identificación";
		alert( mensaje );
	}
	
}// Fin validarId

function validarClave(){
	
	var campoClave = document.forms[0].elements[1];
	
	if( campoClave.value == "" )
	{
		mensaje = "Error: Ingrese su clave de acceso";
		alert( mensaje );
	}
	
	
}// Fin validarClave