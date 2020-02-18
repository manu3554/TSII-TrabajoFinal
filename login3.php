<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/login.css">

    </head>
    <body style="background-image:url(img/imgF.jpg)">
        
        <?php
        
        echo "<form action=login3.php method=POST>";
        echo  "<fieldset style='color:white'>";
             echo  " <legend><h1>INICIO DE SESION C0MO ADMINISTRADOR</h1></legend>";
              echo "  Usuario:<br/>";
               echo "<input type=text name=usuario ><br/>";
               echo "Contrase&ntilde;a:<br/>";
                echo "<input type=password name=contraseña><br/><br/>";
                echo "<input type=submit value=Entrar id=boton >";
            echo"</fieldset>";
        echo "</form>";
        
            if (isset($_POST['usuario'])) {
                
                $usuario = $_POST['usuario'];
                $contraseña = $_POST['contraseña'];

                if ($usuario=="root" && $contraseña=="1234"){
                    header("Location:mantDatos.php");
                }else{
                    echo "Usuario o contraseña incorrecta";
                }
            }else{
                echo "Complete con sus datos por favor <br/>";
            }
            
        ?>
        
    </body>
</html>