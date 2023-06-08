<html>
    <head>
        <title>Consultas art x fact</title>

    </head>


<body>
<h1>Consultas</h1>
<form action="pdf3pru.php" method="post">
<?php
    
    include("config.php");
    $conexion = mysqli_connect("localhost","u130633821_uriel","BlasterSun1010","u130633821_facturas") or die ("Problemas en la conexion");

    if($conexion){
        mysqli_select_db($conexion, "u130633821_facturas") or die ("Error BD");
        $query="SELECT * FROM factura;";
        echo "<br>Folio Factura<br>";
        $registros=mysqli_query($conexion, $query) or die ("error query".mysqli_error());
        echo "<select name='Folio'>";
        while($tupla=mysqli_fetch_array($registros)){
            echo "<option value=".$tupla['Folio']. ">" .$tupla['Folio']."</option>";
        } 
       // 
    }
    echo "</select>";
mysqli_close($conexion); 
?>
<br>
<input type="submit" name="enviar">

</body>
<footer>
    <br>Uriel Montejano Briano - 177771<br>
    Uriel Martinez Monreal - 178646<br>
    Angel Loredo Martinez- 178424<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>