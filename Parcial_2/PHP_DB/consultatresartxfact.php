<html>
    <head>
        <title>Consultas art x fact</title>

    </head>


<body>
<h1>Consultas</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<?php
    
    include("config.php");
    $conexion = mysqli_connect($server, $db_user, $db_pass) or die ("Problemas en la conexion");

    if($conexion){
        mysqli_select_db($conexion, $database) or die ("Error BD");
        $query="SELECT * FROM factura;";
        echo "<br>Folio Factura<br>";
        $registros=mysqli_query($conexion, $query) or die ("error query".mysqli_error());
        echo "<select name='Folio'>";
        while($tupla=mysqli_fetch_array($registros)){
            echo "<option value=".$tupla['Folio']. ">" .$tupla['Folio']."</option>";
        } 
       // mysqli_close($conexion); 
    }
    echo "</select>";
    
    include("config.php");
    $conexion = mysqli_connect($server, $db_user, $db_pass) or die ("Problemas en la conexion");
    
    if(isset($_POST['enviar'])){
            if(isset($_POST['Folio'])){
                if($conexion){
                mysqli_select_db($conexion, $database) or die ("Error BD");
                $query = "SELECT SUM(articulos.precio * artxfactura.Cantidad) AS total FROM artxfactura INNER JOIN articulos ON articulos.ID = artxfactura.IdArticulo WHERE artxfactura.FolioFactura = '$_POST[Folio]';";
                echo "La consulta generada es: <br>".$query;
                $reg=mysqli_query($conexion,$query);
                $tupla=mysqli_fetch_array($reg);
                echo $tupla['total'];
                if(mysqli_query($conexion,$query)) echo "<br>datos guardados<br>";
                    echo "<table border = '1'><tr><th>Suma</th></tr>";
                    echo "<tr><td>".$tupla['total']."</td></tr>";
                    echo "</table>";
                    echo $reg;
            }
         }
     }
      
?>
<br>
<input type="submit" name="enviar">

</body>

</html>