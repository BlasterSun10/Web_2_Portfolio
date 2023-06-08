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
    <form action="bromacorreo.php" method="post">
	<input name="nombre" type="text" >
	<input name="email" type="text" >
	<textarea name="mensaje"cols="35" rows="5">Escribe tu comentario</textarea>
	<input type="submit" name="submit"  value="Enviar mensaje">
    </form>

    <?php
    for($i=0;$i<100;$i++){
        if(isset($_POST['submit'])) {
            $para = "181658@upslp.edu.mx"; // 
            $asunto = "Mensaje desde el sitio de SLP";
            $nombre = $_POST['nombre'];
            $correo = $_POST['email'];
            $mensaje = $_POST['mensaje'];
            $cuerpo = "Enviado por: $nombre\n E-Mail: $correo\nMensaje: $mensaje\n";
            echo "El mensaje ha sido enviado a $para!";
            mail($para, $asunto, $cuerpo);
        } else {	echo "Ha ocurrido un error";}
    }
    
?>


    </body>
    
</html>

