<html>
    <head><title>Contactanos</title>
         <link href="css/Estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="tituloCitas"><h1>CONTACTANOS</h1></div>
        <br><br>
        <fieldset>
            <legend>&nbsp;&nbsp;HORARIOS DE ATENCION&nbsp;&nbsp;</legend>
            <label>Lunes a Sábado de 7:30 am a 11:00 pm <br>
                    Domingos y Feriados de 9:00 am a 9:00 pm </label>
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
            <br><br>
            <a href="Index.html"><p style="text-align:right">REGRESAR</p></a>
        </form>

       
       <?php
        ?>
    </body>
</html>