
<html>
<head><title>BAJAS</title></head>
<body>
        <h1>Inserte RFC a borrar</h1>
    <form action="bajas.php" method="post">
        
        <input type="text" name="RFC">
        <input type="submit" name="enviar">
    </form>
    
    
    <?php
    include("config.php");
    if(isset($_POST['RFC']))
    {
        echo"{$_POST['RFC']}<br>";
        $conexion = mysqli_connect($server,$db_user,$db_pass) or die("Problemas en la conexion");
        if($conexion)
        {
            mysqli_select_db($conexion,"u130633821_facturas") or die("Problemas en la selec. de BDs");
            $query="DELETE FROM clientes WHERE RFC = '$_POST[RFC]';";
            echo "La consulta generada es: <br>".$query;
            if(mysqli_query($conexion,$query)) echo "<br> dato eliminado<br>";
            mysqli_close($conexion);
        }
    }
    else{
            if(isset($_POST['enviar'])){
                if(isset($_POST['RFC'])==false || $_POST['RFC']=="")
                echo"Falta definir RFC<br>";
            }
    }
    ?>
</body>
<footer>
    <br>Uriel Montejano Briano - 177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>
