<!DOCTYPE html>
<html>
    <head>
        <style>
            div {
                width: 200px;
                height: 200px;
                background: #0000FF;
                transition: width 0.5s;
            }
            
            #div1 {transition-timing-function: linear;}


            div:hover {
            width: 400px;
            }
        </style>
    </head>

<?php
$pal1= $_POST['pal1'];
$pal2= $_POST['pal2'];

strtoupper($pal1); 
strtoupper($pal2); 

$pal1=str_split($pal1);
$pal2=str_split($pal2);

sort($pal1); 
sort($pal2); 

implode('', $pal2);
implode('', $pal1);

if($pal1==$pal2){
    echo "<div class= div1>Es anagrama</div>";
}
else{
    echo "<div class= div1>No es anagrama</div>";
}
?>

<footer>
    <br>Uriel Montejano Briano<br>
    177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>
