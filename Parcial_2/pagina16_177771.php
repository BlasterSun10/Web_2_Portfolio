<!DOCTYPE html>
<html>
<body>

<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  for( $i=0;$i<=3;$i++){
    for( $j=0;$j<=2;$j++){
        echo $cars[$i][$j]." ";
    }
    echo "<br>";
  }
?>

</body>
<footer>
    <br>Uriel Montejano Briano - 177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>
