<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votos por estado</title>
</head>
<body>
    <h1>Votos por estado</h1>
    <form action="votsgraf.php" method="post">
    
    <h1>Ordenar por: </h1>
    <select name="orden">
        <option value="estado">Estado</option>
        <option value="democrata">Democrata</option>
        <option value="republicano">Republicano</option>
    </select>
    <input type='submit' value='enviar'>
    </form>
        <?php
            $server="localhost";
            $database="votos";
            $db_user="root";
            $db_pass="";
            $conexion=mysqli_connect($server,$db_user,$db_pass) or die("Error en la conexion");
            if($conexion){
                mysqli_select_db($conexion,"votos") or die("Error al sleccionar BD");            

            $query="SELECT * FROM votos;";
            if($registros=mysqli_query($conexion,$query)){
                echo "PDF <br>";
             
                echo "<form action='votsgraf.php' method='post'>";
                echo "</form>";
            }
        }
        ?>
    </body>
    <footer>
        Uriel Montejano Briano<br>
        Unviersidad Politénica San Luis Potosí<br>
        Programación Web II<br>
    </footer>
</html>