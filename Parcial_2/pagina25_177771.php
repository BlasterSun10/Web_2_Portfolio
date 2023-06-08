<html>
    <head>
        <title>Formulario de Carreras</title>
	<style>
		body{
			background-image: url('https://p4.wallpaperbetter.com/wallpaper/710/403/620/abstract-wallpaper-preview.jpg');
			background-size: 2000px;
			font-size: 24px;
		}

		table{
			color: #C66C00;
		}
	</style>

    </head>
    <body>
        <h1>Carreras en UPSLP</h1>
        <p>¿Que carrera te interesa estudiar?</p>
        <form action="pagina25_177771.php" method="post">
            <input type="checkbox" name="Carrera1" value="1">ITI<br>
            <input type="checkbox" name="Carrera2" value="2">ITEM<br>
            <input type="checkbox" name="Carrera3" value="3">ISTI<br>
            <input type="checkbox" name="Carrera4" value="4">ITMA<br>
            <input type="checkbox" name="Carrera5" value="5">LAG<br>
            <input type="checkbox" name="Carrera6" value="6">LMI<br>
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>

        <?php
		    function leerDatos($nombreArchivo, &$carrera){
		        $archivo = fopen($nombreArchivo, "r+");
		        for ($i=0; $i<6 && !feof($archivo); $i++)
		            fscanf($archivo, "%d\n", $carrera[$i]);
		        fclose($archivo);
		    }

		    function guardarDatos($nombreArchivo, &$carrera){
		        $archivo = fopen($nombreArchivo, "w");
		        for ($i=0; $i<6; $i++)
		            fprintf($archivo, "%d\n", $carrera[$i]);
		        fclose($archivo);
		    }

		    function grafica($datos){
		        
		    }
		?>

        <?php
        	if(!empty($_POST['enviar'])){
        		$datos = array(0, 0, 0, 0, 0, 0);
        		leerDatos("encuesta.txt", $datos);

        		for ($i=0;$i<6;$i++)
        			if(isset($_POST['Carrera'.($i+1)]))
        				$datos[$i]++;

        		grafica($datos);
        		guardarDatos("encuesta.txt", $datos);
        	}
        ?>

		<?php 
		echo "<table>";
		echo "<tr>";
		echo "<td>". $datos[0] ."</td>";
		echo "<td>". $datos[1] ."</td>";
		echo "<td>". $datos[2] ."</td>";
		echo "<td>". $datos[3] ."</td>";
		echo "<td>". $datos[4] ."</td>";
		echo "<td>". $datos[5] ."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td valign='bottom'> <img src='azul.png' width='40px' height='$datos[0]px' > </td>";
		echo "<td valign='bottom'> <img src='azul.png' width='40px' height='$datos[1]px' > </td>";
		echo "<td valign='bottom'> <img src='azul.png' width='40px' height='$datos[2]px' > </td>";
		echo "<td valign='bottom'> <img src='azul.png' width='40px' height='$datos[3]px' > </td>";
		echo "<td valign='bottom'> <img src='azul.png' width='40px' height='$datos[4]px' > </td>";
		echo "<td valign='bottom'> <img src='azul.png' width='40px' height='$datos[5]px' > </td>";
		echo "</tr>";

		echo "<tr>";
		echo "<th> ITI </th>";
		echo "<th> ITEM </th>";
		echo "<th> ISTI </th>";
		echo "<th> ITMA </th>";
		echo "<th> LAG </th>";
		echo "<th> LMI </th>";
		echo "</tr>";
		echo "</table>";
		?>

    </body>
    
    <footer>
    <br>Uriel Montejano Briano<br>
    177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>