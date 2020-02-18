<?php
    
    echo "<h1>Datos de </h1>";
    $dns = "mysql:dbname=Farmacia;host=localhost";
    $user= "root";
    $pass = "";

    try {
        $con = new PDO($dns,$user,$pass);

        $row = $con->query("SELECT * FROM datosCliente where  ");

        while ($rows = $row->fetch()) {
            echo $rows[1]
        }

    } catch (\Throwable $th) {
        
    }
?>