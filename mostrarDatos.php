<html>
    <head>

    </head>
    <body>
        <?php
        echo "hola ",$_GET['user'];
        $usuario = $_GET['user'];

        $dns = "mysql:dbname=farmacia;host=localhost";
        $user = "root";
        $pass = "";
        try {
            $con = new PDO($dns,$user,$pass);

        
            $row = $con->query("SELECT * FROM compras WHERE usuario='$usuario'");

            while ($rows=$row->fetch()) {
                echo $rows[];
            }
            
    
        } catch (PDOException $e) {
            echo "Error:".$e->getMessage();
        }
        ?>
        
    </body>
</html>