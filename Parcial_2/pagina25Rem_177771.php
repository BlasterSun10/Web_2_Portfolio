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
        <form action="pagina25Rem_177771.php" method="post">
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
		        $car=array("ITI","ITEM","ISTI","ITMA","LAG","LMI");
                echo "<table><tr>";
                for($i=0;$i<6;$i++){
                    echo "<td valign='bottom' align='center'>$datos[$i]<br> <img src='azul.png' width='30px' height='$datos[$i]px'>
                    </td>";
                }
                echo "</tr><tr>";
                for($i=0;$i<6;$i++){
                    echo "<td valign='bottom' align='center'>$car[$i]</td>";
                }
                echo "</tr></table>";
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

    </body>
</html>