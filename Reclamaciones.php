<html>
<head>
        <title>Libro de reclamaciones</title>
        <link href="css/EstiloTips.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="tituloTips"><h1>LIBRO DE RECLAMACIONES</h1></div>
    <div class="body">
    <h1>POR FAVOR, COMPLETE LOS RECUADROS</h1><br>
    <form action="" method="POST">
        <fieldset>
            <legend> CONSUMIDOR RECLAMANTE </legend>
            <label>Local :</label>
            <select name="sedes" size ="1" >
                <option value="Cercado">Cercado</option>
                <option value="La Molina">La Molina</option>
                <option value="Santa Anita">Santa Anita</option>
                <option value="Mangdalena">Mangdalena</option>
                <option value="Miraflores">Miraflores</option>
                <option value="Surquillo">Surquillo</option>
                <option value="San Borja">San Borja</option>
                <option value="Lince">Lince</option>
                <option value="Callao" selected>Callao</option>
                <option value="Chorrillos">Chorrillos</option>
                <option value="El Agustino">El Agustino</option>
            </select><br><br>
            <label>Nombre:</label>
            <input type="text" name="txtNombre"> <br><br>
            <label>Apellidos:</label>
            <input type="text" name="txtApellido"> <br><br>
            <label>Documento de identidad:</label>
            <input type="text" name="txtDni"><br>
        </fieldset>
        <br>
        <fieldset>
            <legend> DATOS DE CONTACTO DEL CLIENTE</legend>
            <label>Email:</label>
            <input type="text" name="txtEmail"><br><br>
            <label>Tel&eacute;fono :</label>
            <input type="text" name="txtTelefono"><br><br>
            * Es esencial que complete estos recuadros para poder comunicarnos con Ud. <br><br>
        <input style="padding:7px;" type="submit" name="btnEnviar" value="Enviar"> 
        </fieldset>
    </form>
    <a href="Index.html"><p style="text-align:right">REGRESAR AL MENU PRINCIPAL</p></a> 
</div>
        

        
    
       
       
        

</body>

</html>