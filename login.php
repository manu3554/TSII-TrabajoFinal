<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/login.css">

    </head>
    <body>
        
        <form action="login.php" method="POST">
            <fieldset>
                <legend><h1>INISIO DE SESION</h1></legend>
                Usuario:<br/>
                <input type="text" name="usuario" ><br/>
                Contrase&ntilde;a:<br/>
                <input type="text" name="contraseña"><br/><br/>
                <input type="submit" value="Entrar" id="boton" >
            </fieldset>
        </form>
        <?php
            if (isset($_POST['usuario'],$_POST['contraseña'])) {
                $usuario = $_POST['usuario'];
                $contraseña = $_POST['contraseña'];

                $dns = "mysql:dbname=farmacia;host=localhost";
                $user = "root";
                $pass = "";

                $con = new PDO($dns,$user,$pass);

                $row = $con->query("SELECT * FROM clientes WHERE usuario='$usuario' and contraseña='$contraseña'");

                if ($row!=null) {
                    while ($rows= $row->fetch()) {
                        
                        echo "Felicidades entro";
                    }
                }else{
                    echo "No entro";
                }
                

                
            }else{
                echo "Rellene los datos";
            }
            

            
        ?>
    </body>
</html>