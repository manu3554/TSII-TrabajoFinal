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
                <input type="text" name="contrasena"><br/><br/>
                <input type="submit" value="Entrar" id="boton" >
            </fieldset>
        </form>
        <?php
            if (isset($_POST['usuario'])) {
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];

                $dns = "mysql:dbname=farmacia;host=localhost";
                $user = "root";
                $pass = "";
                try {
                    $con = new PDO($dns,$user,$pass);

                
                    $row = $con->query("SELECT * FROM clientes WHERE usuario='$usuario'and contrasena='$contrasena'");
    
                    
                    $contador = 0;
                    while ($rows= $row->fetch()) {
                        $contador = $contador+1;
                        
                    }
    
                    if($contador>0 ){
                        
                        header("Location:mostrarDatos.php?user=$usuario");
                        
                        
                    }else{
                        echo "No entraste";
                    }
                } catch (PDOException $e) {
                    echo "Error:".$e->getMessage();
                }
            }else{
                echo "Rellene";
            }
                
            

                
                
                

                
            

            
        ?>
    </body>
</html>