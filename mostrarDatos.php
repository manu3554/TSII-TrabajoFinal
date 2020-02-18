<html>
    <head>

    </head>
    <body style="background-color:rgba(186, 246, 250, 0.2)">
        <?php
        
        $usuario = $_GET['usuario'];
        echo "<br/>";
        echo "<center><h1>Datos de $usuario</h1></center>";
        echo "<center>";
        echo "<table style='border:1px solid black'>";
            echo "<tr style='background-color:red;color:white'><th>Usuario</th><th>NombreProducto</th><th>PrecioProducto</th><th>NombreRecibe</th><th>Direccion</th><th>Distrito</th><tr>";

            class TableRows extends RecursiveIteratorIterator{
                function _construct($it){
                    parent::_construct($it, self::LEAVES_ONLY);
                }
                function current(){ 
                    return "<td style='border:1px solid black;width:150px;background-color:rgb(148, 218, 189)'>".parent::current()."</td>";
                }
                function beginChildren(){
                    echo "<tr>";
                }
                function endChildren(){
                    echo "</tr>";
                }
            }
            $dns='mysql:dbname=farmacia;host=localhost';
            $user = 'root';
            $pass = '';

            try {
                $con = new PDO($dns,$user,$pass);
                $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $stmt=$con->prepare("SELECT * FROM compras WHERE usuario='$usuario'");
                $stmt->execute();

                $resultado=$stmt->setFetchMode(PDO::FETCH_ASSOC);

                foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                    echo $v;
                }


            } catch (PDOException $e) {
                echo "ERROR:".$e->getMessage();
            }
            $con=null;

            echo "</table>";
            echo "</center>";
        ?>
        
    </body>
</html>