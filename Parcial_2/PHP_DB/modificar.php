<html>
<head><title>MODIFICACIONES DE DATOS</title></head>

<body>
    <h1>MODIFICACIONES</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    RFC:
    <?php
    include("config.php");
    $conexion = mysqli_connect($server,$db_user,$db_pass) or die ("error en la conexion");
    if($conexion){
        mysqli_select_db($conexion, "u130633821_facturas") or die ("Error BD");
        $query="SELECT Nombre, CorreoElectronico, RFC FROM clientes;";
        $registros=mysqli_query($conexion, $query) or die ("error query".mysqli_error());
        echo "<select name='RFC'>";
        while($tupla=mysqli_fetch_array($registros)){
            echo "<option value=".$tupla['RFC']. ">" .$tupla['RFC']."</option>";
        } 
        mysqli_close($conexion);
    }
    echo"</select>";
    
    if(isset($_POST['enviar'])){
        $query="UPDATE clientes SET ";
        if(isset($_POST['Nombre']) && $_POST['Nombre']!="" && isset($_POST['CorreoElectronico']) && $_POST['CorreoElectronico']!=""){
            $query="UPDATE clientes SET Nombre='".$_POST['Nombre']."', CorreoElectronico='".$_POST['CorreoElectronico']."'  ";
        }else{
            if(isset($_POST['Nombre']) && $_POST['Nombre']!=""){
                 $query=$query."Nombre='".$_POST['Nombre']."' ";
            }
            if(isset($_POST['CorreoElectronico']) && $_POST['CorreoElectronico']!="") {
                $query=$query."CorreoElectronico='".$_POST['CorreoElectronico']."' ";
            }
            
        }
            
            
            if(isset($_POST['RFC'])) $query=$query."WHERE RFC='".$_POST['RFC']."'; ";
            echo $query;
            $conexion=mysqli_connect($server,$db_user,$db_pass) or die ("Problemas en la conexion");
            if($conexion){
                mysqli_select_db($conexion, "id18965042_efacturas") or die ("Error en Base de Datos");
                if(mysqli_query($conexion, $query)) echo "<br>dato modificado<br>";
                mysqli_close($conexion);
            }
    }
    ?>
<br><br><br>
Nombre: <input type="text" name="Nombre"><br>
Mail: <input type="text" name="CorreoElectronico"><br>
<input type="submit" name="enviar">

</form>
</body>
<footer>
    <br>Uriel Montejano Briano - 177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>

</html>