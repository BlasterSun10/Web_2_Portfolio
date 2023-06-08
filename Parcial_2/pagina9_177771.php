<!DOCTYPE html>
<html>
<body>

<head> <title>PHP FECHA CONVERSION</title></head>

<style> 
div {
  width: 100px;
  height: 100px;
  background: #00FF00;
  transition: width 1s;
}

#div1 {transition-timing-function: linear;}


div:hover {
  width: 300px;
}

</style>
<?php
    $mes = array ("","enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");

    $mes_numero =date("n");
	echo " <div class= div1>El mes actual es $mes[$mes_numero]</div>";
?>
</body>
<footer>
    <br>Uriel Montejano Briano - 177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>