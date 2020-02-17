<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/login.css">

    </head>
    <body>
        
        <?php
        $med = $_POST['med'];
        
        echo "<form action=login.php method=POST>";
        echo  "<fieldset>";
             echo  " <legend><h1>INICIO DE SESION</h1></legend>";
              echo "  Usuario:<br/>";
               echo "<input type=text name=usuario ><br/>";
               echo "Contrase&ntilde;a:<br/>";
                echo "<input type=text name=contrasena><br/><br/>";
                echo "<input type = hidden name=$med >";
                echo "<input type=submit value=Entrar id=boton >";
            echo"</fieldset>";
        echo "</form>";
        
            if (isset($_POST['usuario'])) {
                $med = $_POST['$med'];
                echo $med;
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
                        
                        header("Location:mision.php?user=$usuario, ?med=$med");
                        
                        
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