
<html>
<head>
  <title>Calificaciones</title>
  <style>
    body{
      background-image: url('https://thumbs.dreamstime.com/b/notas-para-hacer-el-fondo-de-la-composici%C3%B3n-navidad-lista-wallpaper-los-conos-del-pino-bolas-decoraci%C3%B3n-en-blanco-endecha-plana-104455951.jpg');

    }
    </style>
</head>
<body>
<h2><br>Uriel Montejano Briano<br>
    177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br></h2>
<?php
$nom = array("Jessica","Oscar","Manuel","Ana","Efren");
$cal=array();

$texto='<table bordercolor =#0000FF border=8 <tr>
    <th>Nombre</th>
    <th>Parcial 1</th>
    <th>Parcial 2</th>
    <th>Parcial 3</th>
    <th>Prom</th>
  </tr>';
  $cont_ap=0;
  $cont_na=0;
  for($i=0;$i<5;$i++){
    $sum=0;
    $texto.='<tr>';
    $texto.='<td BGCOLOR="#28fc88">'.$nom[$i].'</td>';
    for($j=0;$j<3;$j++){
  		$a=rand(300,1000);
  		$cal[$i][$j]=$a;
      $sum=$sum+$cal[$i][$j];
		  $texto.='<td BGCOLOR="#4fc1e3">'.($cal[$i][$j]/100).'</td>';
  	}
    $cal[$i][$j]=($sum/3);
    $texto.='<td BGCOLOR="#8bff33">'.round(($cal[$i][$j]/100),2).'</td>';

    if(($cal[$i][$j]/100)>=7){
       $cont_ap++;
    }
    else{
       $cont_na++;
     }

  }
	$texto.='</table>';
	echo $texto;

    echo "Aprobados :<img src='ap.jpg'  height='10px' width='".($cont_ap*20)."'> $cont_ap<br>" ;
    echo "Reprobados :<img src='na.jpg'  height='10px' width='".($cont_na*20)."'> $cont_na<br" ;

?>
</body>
<footer>
    <br>Uriel Montejano Briano - 177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>
