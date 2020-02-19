<html>
    <head><title>Contactanos</title>
         <link href="css/EstiloTips.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="tituloTips"><h1>CONTACTANOS</h1></div>
        <div class="body">
        <br><br>
        <fieldset>
            <legend>&nbsp;&nbsp;HORARIOS DE ATENCION&nbsp;&nbsp;</legend>
            <label>Lunes a Sábado de 7:30 am a 11:00 pm <br>
                    Domingos y Feriados de 9:00 am a 9:00 pm <br><br>
                    *Los horarios de atencion al cliente pueden variar, consulta con nosotros.</label>
        </fieldset>
        <br><br>
        <h1>ENVIANOS UN CORREO</h1>
        <form action="" method="POST">
            <fieldset>
                <br>
                <label>Nombre :</label>
                <input type="text" name="txtNombre" placeHolder="Nombre"><br><br>
                <label>Email :</label>
                <input type="text" name="txtEmail" placeHolder="E-mail"><br><br>
                <label>Asunto :</label>
                <input type="text" name="txtAsunto"placeHolder="Asunto"><br><br>
                <label>Mensaje :</label> <br>
                <textarea name="txtMensaje" cols="90" rows="10"></textarea><br><br>
                <input type="submit" name="btnEnviar" value="Enviar correo">
                <br>
            </fieldset>
            
            <a href="Index.html"><p style="text-align:right">REGRESAR</p></a>
        </form>
</div>

       <?php
            if(isset($_POST["txtNombre"]))   {
 
                $nombre = $_POST["txtNombre"];
                $email = $_POST["txtEmail"];
                $asunto = $_POST["txtAsunto"];
                $mensaje = $_POST["txtMensaje"];
        
                
                $dns="mysql:dbname=farmacia;host=localhost";
                $user="root";
                $pass="";
        
                try {
        
                $con = new PDO($dns,$user,$pass);
                $stmt = "INSERT INTO preguntas (nombre,email,asunto,mensaje) VALUES('$nombre','$email','$asunto','$mensaje')";
        
                $con->exec($stmt);
        
                echo "Se ha enviado su mensaje."."<br>";
                echo "Trataremos de comunicarnos con usted lo antes posible"."<br>";
                echo "Gracias.";
        
                } catch (PDOException $e) {
                echo "Error".$e->getMessage();
                }
        
            }
        ?>
    </body>
</html>