<html>
<head><title>MODIFICACIONES DE DATOS</title></head>

<body>
    <h1>MODIFICACIONES ARTICULOS</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <?php
    include("config.php");
    $select1="";
    $select2="";
    $conexion = mysqli_connect($server,$db_user,$db_pass) or die ("error en la conexion");
    if($conexion){
        mysqli_select_db($conexion, "u130633821_facturas") or die ("Error BD");
        $query="SELECT * FROM articulos;";
        echo "<br>ID Articulo<br>";
        $registros=mysqli_query($conexion, $query) or die ("error query".mysqli_error());
        echo "<select name='ID'>";
        while($tupla=mysqli_fetch_array($registros)){
            echo "<option value=".$tupla['ID']. ">" .$tupla['ID']."</option>";
        } 
        echo"</select>";
        
        $queryf="SELECT * FROM factura;";
        echo "<br>Folio Factura<br>";
        $registros2=mysqli_query($conexion, $queryf) or die ("error query".mysqli_error());
        echo "<select name='Folio'>";
        while($tupla2=mysqli_fetch_array($registros2)){
            echo "<option value=".$tupla2['Folio']. ">" .$tupla2['Folio']."</option>";
        } 
        
    }
    echo"</select>";
    
    
    if(isset($_POST['enviar'])){
        $query = "INSERT INTO artxfactura (IdArticulo, FolioFactura, Cantidad)
        VALUES('$_POST[ID]','$_POST[Folio]','$_POST[Cantidad]');";
        echo "La consulta generada es: <br>".$query;
        if(mysqli_query($conexion,$query)) echo "<br>datos guardados <br>";
        mysqli_close($conexion);
    }
    ?>
<br><br><br>
Cantidad: <input type="text" name="Cantidad"><br>
<input type="submit" name="enviar">

</form>
</body>
<footer>
    <br>Uriel Montejano Briano - 177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>

</html>