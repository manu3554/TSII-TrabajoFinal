<html>
    <head>
        <title>Reserva tu Cita :</title>
        <link href="css/Estilo.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, user-scalable=no,
        initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">  
    </head>
    <body>
        <div id=titulo><h1>CITAS</h1></div>
        <form action="Citas.php" method="POST">
            <br><br><br><br>
            <br><br><br><br>
            <fieldset>
                <legend>Proceso para reserva de cita</legend>
                <label>DNI:</label>
                <input type="text" name="txtDNI"><br><br>
                <label>Edad: </label>
                <input type="text" name="txtEdad"><br><br>
                <label>Codigo de seguridad</label>
                <input type="text" name="txtCodigo"><br>
                <label>Recuerde que su codigo de seguridad, se le brinda al momento de registrarse.</label><br><br>
                <label> Ingrese el &aacute;rea en el que se encuentra interesado(a) :</label>
                <select name="txtareas" >
                    <option value="Cardiologia">Cardiologia</option>
                    <option value="Pediatria">Pediatria</option>
                    <option value="Ginecologia">Ginecologia</option>
                    <option value="Ginecologia">Ginecologia</option>
                    <option value="Dermatologia">Dermatologia</option>
                    <option value="Fisioterapia">Fisioterapia</option>
                    <option value="Gestante">Gestante</option>
                </select><br><br>
                <input type="submit" value="Procesar" name="btnProcesar">
            </fieldset>
        </form>
    <?php



    if(isset($_POST['txtDNI'])) {
        $dni = $_POST["txtDNI"];
        $edad = $_POST["txtEdad"];
        $codigo = $_POST["txtCodigo"];
        $area = $_POST["txtareas"];

        echo "<br><br><br><br><br><br><br><br><br>";
        echo "<br><br><br><br><br><br><br><br><br>";
       
        echo "------------------------------------------------- <br>";
        echo "DNI : $dni <br>";
        echo "Edad : $edad <br>";
        echo "Codigo de seguridad : $codigo <br>";
        echo "&Aacute;rea escogida : $area <br>";
        echo "<br>";
        echo "Su reserva esta en proceso. ";
        echo "Sirvase a pasar por nuestras instalaciones.";
        
        $dns="mysql:dbname=db_essalud;host=localhost";
        $user="root";
        $pass="";
    
        try {
            $con = new PDO($dns,$user,$pass);
            //$sql = "create table citas (codigo int(5), dni int(9), edad int(2), area varchar(25))";
            $insertar = "INSERT INTO citas VALUES ('$codigo', '$dni', '$edad', '$area')";

            //$con->exec($sql);
            $con->exec($insertar);
            echo "<br><br>";
            echo "RESERVA EXITOSA.";  
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }

    ?>
        
    </body>
</html>
