<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/EstiloMant.css">
    </head>
    <body>
        <div id="header"><h1>Mantenimiento de Datos </h1></div>
        <br/>
        <br/>
        <br/>
        <?php
            echo "<div id=cuerpo>";
            echo "<H2>USUARIOS</H2>";
            echo "<table style='border:1px solid black'>";
            echo "<tr><th>Nombre</th><th>Apellido</th><th>Dni</th><th>Sexo</th><th>Telefono
            </th><th>Usuario</th><th>Contraseña</th></tr>";

            class TableRows extends RecursiveIteratorIterator{
                function _construct($it){
                    parent::_construct($it, self::LEAVES_ONLY);
                }
                function current(){
                    return "<td style='border:1px solid black;padding:10px;width:150px'>".parent::current()."</td>";
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

                $stmt=$con->prepare("SELECT * FROM clientes");
                $stmt->execute();

                $resultado = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                    echo $v;
                }



            } catch (PDOException $e) {
                echo "Error:".$e->getMessage();
            }
            $con=null;
            echo "</table>";
            echo "<br/><br/><br/>";
            echo "<h2>COMPRAS POR CADA USUARIO</h2>";
            echo "<table style='border:1px solid black'>";
            echo "<tr><th>Usuario</th><th>NombreProducto</th><th>PrecioUnitario</th><th>NombreRecibe</th><th>Direccion</th><th>Distrito</th><tr>";

            class TableRows2 extends RecursiveIteratorIterator{
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

            try {
                $con = new PDO($dns,$user,$pass);
                $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $stmt=$con->prepare("SELECT * FROM compras");
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
            echo "</div>";
            echo "<br/><br/><br/>";
        ?>
    </body>
</html>