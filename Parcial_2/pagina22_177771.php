<html> 
    <head> <title>Lectura de un archivo</title> 
<style>
    body {
        background-image: url("https://garajedelrock.com/wp-content/uploads/2019/11/Take-on-me-historia.jpg");
    }
</style>

</head> 



    <body> 
        <h1>Take On me A-ha</h1>
<?php 

$ar=fopen("cancion.txt","r") or die("No se pudo abrir el archivo");  //forma de apertura
while (!feof($ar)) //funcion feof retorna true si se ha llegado al final del archivo 
{ 
   $linea=fgets($ar); 
   $lineasalto=nl2br($linea); //convierte el salto de linea a la marca <br> 
   echo $lineasalto; 
} 
fclose($ar); ?> 
</body> 
<footer>
    <br>Uriel Montejano Briano - 177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>
