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
    <form action="futbografnom.php" method="post">
    
    <h1>Numero de partido: </h1>
    <select name="part">
        <option value="1">Partido 1</option>
        <option value="2">Partido 2</option>
        <option value="3">Partido 3</option>.
        <option value="4">Partido 4</option>
    </select>
    <input type='submit' value='enviar'>
    </form>
        <?php
            $server="localhost";
            $database="futexentar";
            $db_user="root";
            $db_pass="";
            $conexion=mysqli_connect($server,$db_user,$db_pass) or die("Error en la conexion");
            if($conexion){
                mysqli_select_db($conexion,"futexentar") or die("Error al sleccionar BD");            

        }
        ?>
    </body>
    <footer>
        Uriel Montejano Briano<br>
        Unviersidad Politénica San Luis Potosí<br>
        Programación Web II<br>
    </footer>
</html>