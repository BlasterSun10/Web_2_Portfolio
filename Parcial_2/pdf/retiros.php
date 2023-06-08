<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retiros</title>
</head>
<body>
    <h1>Retiros</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="">USER: </label><input type="text" name="user"><br>
        <label for="">PIN: </label><input type="text" name="pin"><br>
        <label for="">CANTIDAD $: </label><input type="text" name="cantidad"><br><br>
        <input type="submit" value="enviar">
    </form>
        <?php
            $server="localhost";
            $database="bancos";
            $db_user="root";
            $db_pass="";
            if(isset($_POST['user']) && isset($_POST['pin']) && isset($_POST['cantidad']) && $_POST['user']!="" && $_POST['pin']!=""){
                $conexion=mysqli_connect($server,$db_user,$db_pass) or die("Error en la conexion");
                if($conexion){
                    mysqli_select_db($conexion,"banco") or die("Error al sleccionar BD");

                    $query="SELECT * FROM cuentas WHERE user = '$_POST[user]' AND pin = '$_POST[pin]';";
                    if($registros=mysqli_query($conexion,$query))
                    {
                        echo "Actualizacion Realizada <br>";
                        $total_reg=mysqli_num_rows($registros);
                        if($total_reg==1)
                        {	
                            $tupla=mysqli_fetch_array($registros);
                            $u=$tupla['user'];
                            $s=$tupla['saldo']-$_POST['cantidad'];
                            if($_POST['cantidad']<=$tupla['saldo'] ){
                                $query = "UPDATE cuentas SET saldo = '$s' WHERE user = '$tupla[user]';";
                                if(mysqli_query($conexion,$query)){
                                    echo "USER: ". $u ."<br>";
                                    echo "CANTIDAD RERTIRADA: ".$_POST['cantidad']."<br>";
                                    echo "SALDO: ".$s;
                                }
                                $fecha=date("Y-m-d");
                                $query = "INSERT INTO movimientos (user, cantidad, fecha) VALUES
                                ('$u', $_POST[cantidad], '$fecha')";
                                if(mysqli_query($conexion,$query))
                                    echo "Datos guardados"; 
                                
                            }else{
                                echo "La cantidad ingresada es mayor al saldo o el pin no coincide";
                            }
                            echo "<form action='retiroPDF.php' method='post'>";
                            echo "<input type='text' value='$u' name='user'><br>";
                            echo "<input type='submit' value='enviarf'>";
                            echo "</form>";

                            echo "<form action='retiroPDFmov.php' method='post'>";
                            echo "<input type='text' value='$u' name='user'><br>";
                            echo "<input type='submit' value='enviarf'>";
                            echo "</form>";
                            
                        }	

                    }
                    
                }else{

                }
            }
        ?>
    </body>
</html>