<!DOCTYPE html>
<html>
<head>
    <style>
        #estilotxt{
        color:#FF0000;
        font-weight: bold;
        font-size: 50px;
        background-image:url('https://img.freepik.com/vector-premium/diseno-fondo-tecnologico_23-2148898937.jpg');
        }
        
    </style>
</head>
<body>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;
print "<div id='estilotxt'><h2>". $txt1 ."</h2>";
print "Study PHP at " . $txt2 . "<br></div>";
print $x + $y; 

?>

</body>
<footer>
    <br>Uriel Montejano Briano - 177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>
