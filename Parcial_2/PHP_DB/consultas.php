<html>
    <head><title>CONSULTAS</title></head>
    <body>
        
<h1>Consultas</h1>

<?php
    
    include("config.php");
    $conexion = mysqli_connect($server, $db_user, $db_pass) or die ("Problemas en la conexion");

    if($conexion){

        mysqli_select_db($conexion, "u130633821_facturas") or die ("Problemas en la base de datos");
        $query = "SELECT Nombre, CorreoElectronico, RFC FROM clientes;";
        $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
        echo "<table border = '1'><tr><th>RFC</th><th>NOMBRE</th><th>EMAIL</th></tr>";

        while($tupla = mysqli_fetch_array($registros)){

            echo "<tr><td>".$tupla['RFC']."</td>";
            echo "<td>".$tupla['Nombre']."</td>";
            echo "<td>".$tupla['CorreoElectronico']."</td></tr>";

        }

        echo "</table>";
        mysqli_close($conexion);

    }
       
?>
    </body>
    <footer>
    <br>Uriel Montejano Briano - 177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>
