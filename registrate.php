<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/EstiloReg.css">

    </head>
    <body>
        <div id="contenedor"><h1>Registrate</h1></div>
    <form action="registrate.php" method="post">
        <center>
        <table >
            <tr>
                <td>Nombre:<input type="text" name="nombre" placeholder="Ingrese nombre" ></td>
                <td>Telefono:<input type="text" name="telefono" placeholder="Ingrese telefono" ></td>
            </tr>
            <tr>
                
                <td>Apellido:<input type="text" name="apellido" placeholder="Ingrese apellido" ></td>
                <td>Usuario:<input type="text" name="usuario" placeholder="Ingrese usuario" ></td>
            </tr>
            <tr>
                
                <td>Dni:<input type="text" name="dni" placeholder="Ingrese dni" ></td>
                <td>Contrase&ntilde;a:<input type="text" name="contra" placeholder="Ingrese contrase&ntilde;a" ></td>
            </tr>
            <tr>
                <td>Sexo:<br/>
                    <input type="radio" name="sexo" value="Hombre">Hombre<br/>
                    <input type="radio" name="sexo" value="Mujer">Mujer
                </td>
                <td style="text-align:center"><input id="color" type="submit" value="Registrarse"></td>
                
            </tr>
        </table>
        </center>
    </form>

    
    <?php
        echo "<link rel=stylesheet type=text/css href=css/EstiloReg.css> ";
        if (isset($_POST['nombre'])) {
            $dns = "mysql:dbname=farmacia;host=localhost";
            $user = "root";
            $pass = "";

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $dni = $_POST['dni'];
            $sexo = $_POST['sexo'];
            $telefono = $_POST['telefono'];
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contra'];
            

    
            try {
                $con = new PDO($dns,$user,$pass);
                
                $sql = "INSERT INTO clientes VALUES('$nombre','$apellido','$dni','$sexo','$telefono','$usuario','$contraseña')";
                $con->exec($sql);
                echo "Registrado correctamente";
    
    
            } catch (PDOException $e) {
                echo "Error:".$e->getMessage();
            }
            $con = null; 
        }else{
            echo "<h4>Rellene los datos</h4>";
        }
        

    ?>
        
    </body>
</html>