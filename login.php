<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/login.css">

    </head>
    <body>
        
        <?php
        $med = $_POST['med'];
        $precio = $_POST['precio'];
        
        echo "<form action=login.php method=POST>";
        echo  "<fieldset>";
             echo  " <legend><h1>INICIO DE SESION</h1></legend>";
              echo "  Usuario:<br/>";
               echo "<input type=text name=usuario ><br/>";
               echo "Contrase&ntilde;a:<br/>";
                echo "<input type=text name=contraseña><br/><br/>";
                // variables importadas
                echo "<input type = hidden name=med value=$med >";
                echo "<input type = hidden name=precio value=$precio >";
                echo "<input type=submit value=Entrar id=boton >";
            echo"</fieldset>";
        echo "</form>";
        
            if (isset($_POST['usuario'])) {
                $precio = $_POST['precio'];
                $med = $_POST['med'];
                $usuario = $_POST['usuario'];
                $contraseña = $_POST['contraseña'];

                $dns = "mysql:dbname=farmacia;host=localhost";
                $user = "root";
                $pass = "";
                try {
                    $con = new PDO($dns,$user,$pass);

                
                    $row = $con->query("SELECT * FROM clientes WHERE usuario='$usuario'and contraseña='$contraseña'");
    
                    
                    $contador = 0;
                    while ($rows= $row->fetch()) {
                        $contador = $contador+1;
                        
                    }
    
                    if($contador>0 ){
                        
                        header("Location:Compra.php?user=$usuario & med=$med & precio=$precio");
                        
                        
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