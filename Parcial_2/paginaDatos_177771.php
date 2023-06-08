<html>
   <head><title>DATOS</title>
   <meta http-equiv="content_type" content="text/html; charset=iso-8859-1">
   <link rel="stylesheet" type="text/css" href="EstiloFormularioAlumno.css">
   <style>
         body{
            background-size: 2000px;
            background-image: url('https://p4.wallpaperbetter.com/wallpaper/990/938/495/arrow-pointer-computer-form-wallpaper-preview.jpg');
            color: greenyellow;
            font-size: 20px;
         }
         
      </style>


   </head>
   <body>
		<?php

			if(isset($_POST['enviar'])){
				echo "<h2>Matricula escrita</h2>";
				if(empty($_POST['matricula'])){
					echo "No hay matricula </p>";
				}else{
					echo "<p>Matricula: ".$_POST['matricula']."</p>";
				}

				echo "<h2>Carrera seleccionada</h2>";
				if(empty($_POST['carrera'])){
					echo "No hay carrera </p>";
				}else{
					echo "<p>Carrera: ".$_POST['carrera']."</p>";
				}


				echo "<h2>Semestre seleccionado</h2>";
				if(empty($_POST['semestre'])){
					echo "No hay semestre </p>";
				}else{
					echo "<p>Semestre: ".$_POST['semestre']."</p>";
				}
				
				echo "<h2>Materias seleccionadas</h2>";
				if(isset($_POST['materia'])){
					$materias=$_POST['materia'];  
					for($i=0;$i<count($materias);$i++) 
						echo "<p>".$materias[$i]."</p>";
				}else{
					echo "No hay materias";
				}

			}
		?>
</body>

<footer>
    <br>Uriel Montejano Briano<br>
    177771<br>
    Universidad Politecnica de San Luis Potosi<br>
    Programacion Web II<br>
</footer>
</html>