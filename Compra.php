<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/EstiloCom.css">


    </head>
    <body>
        <?php
        if (isset($_GET['med'])) {
            $med = $_GET['med'];
            $usuario = $_GET['user'];
            $precio = $_GET['precio'];
            echo "<div id='h1'><h1>Proceso para compra de ", $med, "</h1></div>";
            echo "<br/>";
            echo "<br/>";
            echo "<br/>";
    
    
            echo "<div id=form>";
            echo "<form action=Compra.php method=post>";
                    // variables importadas
                    echo "<input type=hidden name=med value=$med>";
                    echo "<input type=hidden name=usuario value=$usuario>";
                    echo "<input type=hidden name=precio value=$precio>";
                    echo "Nombre de quien recibe:<br/>";
                    echo "<input type=text name=nombreR placeholder='Ingrese Nombre'><br/><br/>";
                    echo "Direccion:<br/>";
                    echo "<input type=text name=direccion placeholder='Ingrese direccion'><br/><br/>";
                    echo "Distrito:<br/>";
                    echo "<input type=text name=distrito placeholder='Ingrese distrito'><br/><br/>";
                    echo "<input id=boton type=submit value = Comprar>";
                
            echo "</form>";
            echo "</div>";
        }
        if (isset($_POST['nombreR'])) {
                $nombreR = $_POST['nombreR'];
                $direccion = $_POST['direccion'];
                $distrito = $_POST['distrito'];
                $med = $_POST['med'];
                $usuario = $_POST['usuario'];
                $precio = $_POST['precio'];

                $dns="mysql:dbname=farmacia;host=localhost";
                $user= "root";
                $pass= "";
    
                try {
                    $con = new PDO($dns,$user,$pass);
    
                    $sql = "INSERT INTO compras VALUES('$usuario','$med','$precio','$nombreR','$direccion','$distrito')";
    
                    $con->exec($sql);

                    header("Location:graciasCompra.html");
                    

                    echo "Compra realizada";
                } catch (PDOException $e) {
                    echo "Error".$e->getMessage();
                }
        }
            
            
    
                
        
        

        ?>
        
    </body>
</html>