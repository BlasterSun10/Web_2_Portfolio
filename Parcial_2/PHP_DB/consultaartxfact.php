<h1>Consultas Articulos x Factura</h1>

<?php
    
    include("config.php");
    $conexion = mysqli_connect($server, $db_user, $db_pass) or die ("Problemas en la conexion");

    if($conexion){

        mysqli_select_db($conexion, $database) or die ("Problemas en la base de datos");
        $query = "SELECT FolioFactura, IdArticulo, Cantidad FROM artxfactura;";
        $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
        echo "<table border = '1'><tr><th>Folio Factura</th><th>IdArticulo</th><th>Cantidad</th></tr>";

        while($tupla = mysqli_fetch_array($registros)){

            echo "<tr><td>".$tupla['FolioFactura']."</td>";
            echo "<td>".$tupla['IdArticulo']."</td>";
            echo "<td>".$tupla['Cantidad']."</td></tr>";

        }

        echo "</table>";
        mysqli_close($conexion);

    }
       
?>