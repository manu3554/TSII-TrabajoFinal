<html>
    <head>

    </head>
    <body>
        <?php
        
        $usuario = $_GET['usuario'];

        echo "Datos de $usuario";

        echo "<table style='border:1px solid black'>";
            echo "<tr><th>Usuario</th><th>NombreProducto</th><th>PrecioProducto</th><th>NombreRecibe</th><th>Direccion</th><th>Distrito</th><tr>";

            class TableRows extends RecursiveIteratorIterator{
                function _construct($it){
                    parent::_construct($it, self::LEAVES_ONLY);
                }
                function current(){ 
                    return "<td style='border:1px solid black;width:150px'>".parent::current()."</td>";
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
        ?>
        
    </body>
</html>