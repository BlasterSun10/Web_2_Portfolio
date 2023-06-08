<html>
<head>
    <title>ALTAS</title>
</head>
<body>
<h1>Favor de llenar formulario</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Nombre: <input type="text" name="Nombre"><br>
RFC: <input type="text" name="RFC"><br>
Mail: <input type="text" name="CorreoElectronico"><br>
<input type="submit" name="enviar">
</form>

<?php 
include("config.php");
if(isset($_POST['Nombre']) && isset($_POST['RFC']) && isset($_POST['CorreoElectronico']))
{
    echo "{$_POST['Nombre']}<br>";
    echo "{$_POST['RFC']}<br>";
    echo "{$_POST['CorreoElectronicocorreo']}<br>";
    $conexion=mysqli_connect($server,$db_user,$db_pass) or die ("Problemas en la conexion");
    if($conexion){
        echo "Se conecto exitosamente <br>";
        mysqli_select_db($conexion,"u130633821_facturas")
        or die ("Problemas en la seleccion de base de datos");
        echo "Se conecto exitosamente a bd<br>";
        $query = "INSERT INTO clientes (RFC, Nombre, CorreoElectronico)
        VALUES('$_POST[RFC]','$_POST[Nombre]','$_POST[CorreoElectronico]');";
        echo "La consulta generada es: <br>".$query;
        if(mysqli_query($conexion,$query)) echo "<br>datos guardados <br>";
        mysqli_close($conexion);
    }
}
else{
    if(isset($_POST['enviar'])){
        if(isset($_POST['Nombre'])==false || isset($_POST['Nombre'])=="")
        echo "Falta definir nombre <br>";
        if(isset($_POST['RFC'])==false || isset($_POST['RFC'])=="")
        echo "Falta definir RFC <br>";
        if(isset($_POST['CorreoElectronico'])==false || isset($_POST['CorreoElectronico'])=="")
        echo "Falta definir correo <br>";
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