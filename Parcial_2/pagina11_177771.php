<html>
    <head><title>Arrays con PHP</title> </head>
    <body>
    <?php
        $precio=100;
        $iva=16;
        $imp=(($precio*$iva)/100)+$precio;
        echo "Costo del producto sin impuestos =".$precio;
        echo "Costo del producto con impuestos =".$imp;
    ?>

    </body>
    <footer>
    <br>Uriel Montejano Briano - 177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>