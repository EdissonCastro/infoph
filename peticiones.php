<html>
<head>
    <title>PQR</title>
    <meta charset="utf-8">
    
    <?php include("index.php"); ?>

    <style type="text/css">
        
        .center {
    
            width: 150%;
            max-width:900px;
            margin:auto;
        }

        .form2 {

            width: 400px;
            height: 620px;
            top: 100px;
            position: relative;
            position: inherit;
            border-radius: 15px;
            background: rgba(0,0,0,0.4);
            justify-content: center;
        }

           p {
                
            font-family: broadway;
            font-size: 25px;
            color: #000;
            justify-content: center;
        }

        input {
    
            background: #bcbcbc;
            color: #000;
            width: 300px;
            height: 40px;
            font-family: verdana;
            font-size: 18px;
            border: 2px solid #000;
            border-radius: 5px;
            margin-bottom: -3px;
            justify-content: center;
        }

        textarea {

            width: 300px;
            height: 170px;
            border-radius: 5px;
        }

     


#boton{

    font-family: arial black;
    background: #628d2e;
    font-size: 20px;
    color: #000;
    width: 270px;
    height: 45;
    justify-content: center;
    
}

#boton:hover{

    font-family: arial black;
    background: #6cb50d;
    font-size: 24px;
    color: #000;
    justify-content: center;
    
}



/*le da color al placeholder o texto 
dentro de los campos de los formularios*/
input::-webkit-input-placeholder {

  color: rgba(0,0,0,0.7);
}

</style>
    
</head>

<body>
    
<center>
<br/><br/><br/>
    
<div class="form2">
    <p>Peticiones, Quejas y Reclamos.</p>
    <br/>
    
      <form method = "POST" action = "enviarpqr.php">
        
            <input type = "text" name = "nombre" placeholder = "Nombres" required/>
            <br/><br/>
          
            <input type = "text" name = "apellido" placeholder = "Apellidos" required/>
            <br/><br/>
          
            <input type = "text" name = "telefono" placeholder = "Su Telefono" />
            <br/><br/>
            
            <input type = "text" name = "correo" placeholder = "Su Correo" />
            <br/><br/>

            <textarea name="mensaje" placeholder="Escriba su mensaje aqui..." required></textarea>
            <br/><br/>
          
            <input id=boton type = "submit" value = "Enviar">
          
    </form>
    

</div>
</center>
</body>
</html>