<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Sign Up - Tivo - SaaS App HTML Landing Page Template</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="indexproy.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="indexproy.html"><img src="images/logo.svg" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link page-scroll" href="indexproy.php#header">Inicio<span class="sr-only">(current)</span></a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="ofertasnolog.php#features">Ofertas de empleo</a>
                    </li>
                    </ul>
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="log-in.php">Iniciar Sesión</a>
                    </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Registro</h1>
                   <p>Llena los datos requeridos. ¿Ya eres un Usuario?, entonces <a class="white" href="log-in.php">Inicia Sesión</a></p> 
                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <form action=sign-up.php method="post">
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="NombreUsu" required>
                                <label class="label-control" for="semail">Nombre</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="ApellidoUsu" required>
                                <label class="label-control" for="sname">Apellido</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="EdadUsu" required>
                                <label class="label-control" for="spassword">Edad</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="RFCUsu" required>
                                <label class="label-control" for="semail">RFC</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="SexoUsu" required>
                                <label class="label-control" for="sname">Sexo</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="FecNacUsu" required>
                                <label class="label-control" for="spassword">Fecha Nacimiento (AAAA-MM-DD)</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="DomicilioUsu" required>
                                <label class="label-control" for="semail">Domicilio</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="EstudiosUsu" required>
                                <label class="label-control" for="sname">Estudios</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="TelefonoUsu" required>
                                <label class="label-control" for="spassword">Telefono</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="CorreoEleUsu" required>
                                <label class="label-control" for="semail">Correo Electronico</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="CURPUSU" required>
                                <label class="label-control" for="sname">CURP</label>
                            </div>
                            Tu contraseña por defecto sera "ContraUsu"<br><br>
                            
                            <div class="form-group checkbox">
                                <input type="checkbox" id="sterms" value="Agreed-to-Terms" required>Estoy de acuerdo con la <a href="privacy-policy.html">Política de Privacidad</a> y los <a href="terms-conditions.html">Términos y condiciones</a>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button" name="enviar">Registrarse</button>
                            </div>
                            <div class="form-message">
                                <div id="smsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                        
                        <?php
                            include("config.php");
                            if(isset($_POST['NombreUsu']) && isset($_POST['ApellidoUsu']) && isset($_POST['EdadUsu']) && isset($_POST['RFCUsu']) && isset($_POST['SexoUsu']) && isset($_POST['FecNacUsu']) && isset($_POST['DomicilioUsu']) && isset($_POST['EstudiosUsu']) && isset($_POST['TelefonoUsu']) && isset($_POST['CorreoEleUsu']) && isset($_POST['CURPUSU']))
                            {
                            $conexion=mysqli_connect($server,$db_user,$db_pass) or die ("Problemas en la conexion");
                            if($conexion){
                                echo "Se conecto exitosamente <br>";
                                mysqli_select_db($conexion,$database)
                                or die ("Problemas en la seleccion de base de datos");
                                echo "Se conecto exitosamente a bd<br>";
                                $query = "INSERT INTO Usuarios (IDUsu, NombreUsu, ApellidoUsu, EdadUsu, RFCUsu, SexoUsu, FecNacUsu, DomicilioUsu, EstudiosUsu,   TelefonoUsu, CorreoEleUsu, CURPUSU, ContraUsu, TipoUsu)
                                VALUES('','$_POST[NombreUsu]','$_POST[ApellidoUsu]',$_POST[EdadUsu],'$_POST[RFCUsu]','$_POST[SexoUsu]','$_POST[FecNacUsu]','$_POST[DomicilioUsu]','$_POST[EstudiosUsu]','$_POST[TelefonoUsu]','$_POST[CorreoEleUsu]','$_POST[CURPUSU]','ContraUsu','Usuario');";
                                echo "La consulta generada es: <br>".$query;
                                if(mysqli_query($conexion,$query)) echo "<br>datos guardados <br>";
                                mysqli_close($conexion);
                            }
                        }
                        else{
                            if(isset($_POST['enviar'])){
                                if(isset($_POST['NombreUsu'])==false || isset($_POST['NombreUsu'])=="")
                                echo "Falta definir Nombre<br>";
                                
                                if(isset($_POST['ApellidoUsu'])==false || isset($_POST['ApellidoUsu'])=="")
                                echo "Falta definir Apellido<br>";
                                
                                if(isset($_POST['EdadUsu'])==false || isset($_POST['EdadUsu'])=="")
                                echo "Falta definir Edad<br>";
                                
                                if(isset($_POST['RFCUsu'])==false || isset($_POST['RFCUsu'])=="")
                                echo "Falta definir RFC<br>";
                                
                                if(isset($_POST['SexoUsu'])==false || isset($_POST['SexoUsu'])=="")
                                echo "Falta definir Sexo<br>";
                                
                                if(isset($_POST['FecNacUsu'])==false || isset($_POST['FecNacUsu'])=="")
                                echo "Falta definir Fecha de Nacimiento<br>";
                                
                                if(isset($_POST['DomicilioUsu'])==false || isset($_POST['DomicilioUsu'])=="")
                                echo "Falta definir Domicilio<br>";
                                
                                if(isset($_POST['EstudiosUsu'])==false || isset($_POST['EstudiosUsu'])=="")
                                echo "Falta definir Estudios<br>";
                                
                                if(isset($_POST['TelefonoUsu'])==false || isset($_POST['TelefonoUsu'])=="")
                                echo "Falta definir Telefono<br>";
                                
                                if(isset($_POST['CorreoEleUsu'])==false || isset($_POST['CorreoEleUsu'])=="")
                                echo "Falta definir Correo Electronico<br>";
                                
                                if(isset($_POST['CURPUSU'])==false || isset($_POST['CURPUSU'])=="")
                                echo "Falta definir CURP<br>";
                            }
                        }
                        ?>
                        
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>