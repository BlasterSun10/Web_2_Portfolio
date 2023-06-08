<!DOCTYPE html>
<html> 
<head> 
    <title>Obtener promedio</title> 
</head>

<body> 
    <?php 
    function promedio($val1,$val2) { 
        $pro=$val1/$val2; 
        return $pro; 
    } 
    $n1=10; 
    $n2=7; 
    $prom=promedio($n1,$n2);
    echo $prom; 
    ?> 
</body> 
<footer>
    <br>Uriel Montejano Briano - 177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>
