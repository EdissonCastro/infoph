<html>
<head>
	<meta charset="utf-8" >
    <title>Ingreso</title>
	
    <link  href="css/estilo_form2.css" rel="stylesheet" type="text/css">
	
    <?php include("index.php"); ?>
	<script type="text/javascript" src="validacion.js"></script>
	<script type="text/javascript" src="validarIngreso.js"></script>

</head>
<body>

    <center>
        <br/>
        <br/>

        <div class="form2">
            <form method = "POST" action = "consultar.php">
                <br/>
                <style type="text/css">p {font-family: broadway; font-size:35px;}</style>
                <p>INGRESAR</p>
                <br/>
                <input type = "text" name = "idUsuario" placeholder = "Identificacion de usuario"
				onblur="validarIdentificacion();">
                <br/>
                <br/>
                <input type = "password" name = "clave" placeholder = "Clave de acceso"
				onblur="validarClave();">
                <br/>
                <br/>
                <input id=boton type = "submit" value = "Ingresar">
                <br/>
                <br/>
                <font face="verdana" size="3" color="#ffffff">
                    <a href="Restablecer.php">olvido su contrase&ntildea</a>
                </font>
            </form>
        </div>
    </center>

</body>
</html>