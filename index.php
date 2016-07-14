<html>
<head>
	<title>inicio</title>   

	<style type='text/css'>
        
        @import "barrasocial/estilosocial.css";
        @import "barrasocial/fonts.css";

		* {
				padding: 2px;
				margin: 0;
				font-family: arial;
				font-size: 18;
		}
        
     	body {

  /*la etiqueta bacground size pertime aumentar la imagen sin que se repita*/
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         background-repeat:no-repeat; 
         background-size: 100vm 100vh;
         /*la etiqueta overflow permite fijar la imagen de fondo en el navegador*/
         background-attachment: fixed;
         overflow: scroll;    
    	}

		.center {
				width: 150%;
				max-width:840px;
				margin:auto;
		}
 
		.menu li a  {
				background-color:#F3FF8A;
				color: #000;
				text-decoration: none;
				padding: 17px 12px;
	    		border-radius: 4px;
 				position: relative;
 				transition: all 700ms ease;
 				display: block;
		}

		.menu li a :before {

				content:'';
 	 			position: relative;
  				background: #9EB200;
 				border-radius: 5px;
 				transition: all 10s ease;
		}

	 	/*color al pasar el mouse */
		.menu li a:hover {

				background-color: #9EB200;
			    font-size: 20;
            	padding: 18px 14px;
						
		}		

		/*ocultar los submenus */
		.menu li ul {

			display: none;
			position: relative;
			min-width: 140px;

		}

		.menu li:hover > ul {
			
			display: block;

		}

		.menu li ul li {

			position: relative;

		}

		/*posicion de los submenus*/
		.menu li ul li ul {

			position: absolute;
			right: -140px;
			top: 0px;

		}

	
		header label:hover {

			cursor: pointer;
			background: rgba(0,0,0,0.3);
		
		}

		.menu ul {

			margin: 0;
			list-style: none;
			padding: 0;
			display: flex;
		}

		/*atributos de la imagen*/
		.logo img {
 
			top: 50px;
			padding: 1px 1px; 
			position: ;
			width: 350px;
			height: 200px;
			margin: 0px;
			opacity: ;

		}


		/*eventos que se producen al minimizar la ventana 
		en 700 pixeles*/
		@media (max-width: 700px) {

			header label{
		
				display: block;
		
			}

			.menu {

				position: absolute;
				width: 50%;

			}

			.menu ul {
			
				flex-direction: column;
			
			}

			.menu li {

					border-top: 0px solid #fff;

			}

			.menu li ul li {

				position: relative;
				right: -50px;
				top: 2px;

			}

			.menu li ul li ul {

				position: relative;
				right: -10px;
				top: 3px;

			}

			.logo img {

				top: 5px;
				padding: 0px 0px; 
				width: 350px;
				height: 200px;
				margin: 0px;
				opacity: ;

			}
		}

	</style>
</head>

<body background='edificio.jpg' style='background-repeat:no-repeat; background-position:center' 
bgproperties='fixed'>
        
        <div class="social">
			<ul>
				<li><a href="http://www.facebook.com" target=".blank" class="icon-facebook"></a></li>
				<li><a href="http://www.youtube.com" target=".blank" class="icon-youtube"></a></li>
				<li><a href="http://www.instagram.com" target=".blank" class="icon-instagram"></a></li>
			</ul>
		</div>

	<?php

		echo("	<header>
			 		<div class='center'>
						<div class='logo'>
							<img src='castilla6_logo.png' alt=''>
					    </div>
					
				
					<nav class='menu'>
				
						<ul>				
							<li><a href='index.php'>Inicio</a>
							<li><a href=''>Usuarios</a>

							<ul>
								<li><a href='ingreso.php'>Ingresar</a>
								<li><a>Registrar</a>

									<ul>
										<li><a href='Registropropietario.php'>Propietario</a></li>
										<li><a href='Registroarrendatario.php'>Arrendatario</a></li>
									</ul>
								</li>
							</ul>								

								<li><a href='clasificados.php'>Clasificados</a></li>
								<li><a href='reglamentacion.php'>Reglamentaci&oacuten</a></li>
								<li><a href='noticiaseventos.php'>Noticias/Eventos</a></li>	
								<li><a href=''>Administraci&oacuten</a>
							
								<ul>
									<li><a href='Consejo.php'>Consejo</a></li>					
									<li><a href='comunicados.php'>Comunicados</a></li>
								</ul>

							</li>

				<li><a href='peticiones.php'>PQR</a></li>

				</div>

		</header>");

?>
</body>
</html>