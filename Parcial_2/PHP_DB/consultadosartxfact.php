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
    
    include("config.php");
    $conexion = mysqli_connect($server, $db_user, $db_pass) or die ("Problemas en la conexion");
    
    if(isset($_POST['enviar'])){
      
                if($conexion){
                mysqli_select_db($conexion, "u130633821_facturas") or die ("Error BD");
                $query = "SELECT articulos.NombreArt, articulos.Cantidad FROM artxfactura INNER JOIN articulos ON articulos.ID = artxfactura.IdArticulo WHERE artxfactura.FolioFactura = '$_POST[Folio]';";
                echo "La consulta generada es: <br>".$query;
                $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
                if(mysqli_query($conexion,$query)) echo "<br>datos guardados <br>";
                
                    echo "<table border = '1'><tr><th>Nombre Articulo</th><th>Cantidad</th></tr>";
                    while($tupla = mysqli_fetch_array($registros)){
                    echo "<tr><td>".$tupla['NombreArt']."</td><td>".$tupla['Cantidad']."</td></tr>";
            
                }
                 echo "</table>";  
            }
             
     }
      mysqli_close($conexion); 
?>
<br>
<input type="submit" name="enviar">

</body>

</html>