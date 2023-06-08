<?php
include_once 'verises.php';
?>

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
    <title>Modo Usuario</title>
    
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
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="reclutador.php#header">Página principal</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="recluEdiOfer.php#features">Editar ofertas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="recluConVac.php#features">Consultar vacantes</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="recluEdiPerf.php#features">Perfil</a>
                    </li>
                    <form action="logout.php" method="post">
                        <span class="nav-item">
                            <a class="btn-outline-sm" href="indexproy.php">Cerrar sesión</a>
                        </span>
                    </form>  
                </ul>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Enviar Curriculum (Usuario)</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container-large">
                        <img class="img-fluid" src="images/article-details-large.jpg" alt="alternative">
                    </div> <!-- end of image-container-large -->
                    <div class="text-container">
                        <h1>Envia tus datos del Curriculum Vitae</h1>
                        <form action=usuenvcurr.php method="post">
                            Nombre: <input type="text" name="Nombre"><br>
                            Correo electrónico: <input type="text" name="CorreoEle"><br>
                            Fecha de Nacimiento (AAAA-MM-DD): <input type="text" name="FechaNaci"><br>
                            Teléfono: <input type="text" name="Telefono"><br>
                            Descripción: <input type="text" name="Descripcion"><br>
                            Trabajo 1: <input type="text" name="Trabajo1"><br>
                            Trabajo 2: <input type="text" name="Trabajo2"><br>
                            Trabajo 3: <input type="text" name="Trabajo3"><br>
                            Idioma extra 1: <input type="text" name="IdiomaExtra1"><br>
                            Idioma extra 2: <input type="text" name="IdiomaExtra2"><br>
                            Nivel académico: <input type="text" name="NivelAcademico"><br>
                            Trabajo Actual: <input type="text" name="TrabajoAct"><br>
                            ID Usuario: <input type="text" name="IDUsuario"><br>
                            <input type="submit" name="enviar">
                        </form>
                        
                        <?php 
                        include("config.php");
                        if(isset($_POST['Nombre']) && isset($_POST['CorreoEle']) && isset($_POST['FechaNaci']) && isset($_POST['Telefono']) && isset($_POST['Descripcion']) && isset($_POST['Trabajo1']) && isset($_POST['Trabajo2']) && isset($_POST['Trabajo3']) && isset($_POST['IdiomaExtra1']) && isset($_POST['IdiomaExtra2']) && isset($_POST['NivelAcademico']) && isset($_POST['TrabajoAct']))
                        {
                            $conexion=mysqli_connect($server,$db_user,$db_pass) or die ("Problemas en la conexion");
                            if($conexion){
                                echo "Se conecto exitosamente <br>";
                                mysqli_select_db($conexion,$database)
                                or die ("Problemas en la seleccion de base de datos");
                                echo "Se conecto exitosamente a bd<br>";
                                $query = "INSERT INTO Curriculum (IDcurri, Nombre, CorreoEle, FechaNaci, Telefono, Descripcion, Trabajo1, Trabajo2, Trabajo3,   IdiomaExtra1, IdiomaExtra2, NivelAcademico, TrabajoAct, IDUsuario)
                                VALUES('','$_POST[Nombre]','$_POST[CorreoEle]','$_POST[FechaNaci]','$_POST[Telefono]','$_POST[Descripcion]','$_POST[Trabajo1]','$_POST[Trabajo2]','$_POST[Trabajo3]','$_POST[IdiomaExtra1]','$_POST[IdiomaExtra2]','$_POST[NivelAcademico]','$_POST[TrabajoAct]','$_POST[IDUsuario]');";
                                echo "La consulta generada es: <br>".$query;
                                if(mysqli_query($conexion,$query)) echo "<br>datos guardados <br>";
                                mysqli_close($conexion);
                            }
                        }
                        else{
                            if(isset($_POST['enviar'])){
                                if(isset($_POST['Nombre'])==false || isset($_POST['Nombre'])=="")
                                echo "Falta definir Nombre <br>";
                                
                                if(isset($_POST['CorreoEle'])==false || isset($_POST['CorreoEle'])=="")
                                echo "Falta definir Puesto de Oferta <br>";
                                
                                if(isset($_POST['FechaNaci'])==false || isset($_POST['FechaNaci'])=="")
                                echo "Falta definir Puestos disponibles<br>";
                                
                                if(isset($_POST['Telefono'])==false || isset($_POST['Telefono'])=="")
                                echo "Falta definir Descripción de Oferta <br>";
                                
                                if(isset($_POST['Descripcion'])==false || isset($_POST['Descripcion'])=="")
                                echo "Falta definir Fecha de inicio <br>";
                                
                                if(isset($_POST['Trabajo1'])==false || isset($_POST['Trabajo1'])=="")
                                echo "Falta definir Fecha Fianl Disponible <br>";
                                
                                if(isset($_POST['Trabajo2'])==false || isset($_POST['Trabajo2'])=="")
                                echo "Falta definir Fecha Fianl Disponible <br>";
                                
                                if(isset($_POST['Trabajo3'])==false || isset($_POST['Trabajo3'])=="")
                                echo "Falta definir Fecha Fianl Disponible <br>";
                                
                                if(isset($_POST['IdiomaExtra1'])==false || isset($_POST['IdiomaExtra1'])=="")
                                echo "Falta definir Salario <br>";
                                
                                if(isset($_POST['IdiomaExtra2'])==false || isset($_POST['IdiomaExtra2'])=="")
                                echo "Falta definir Salario <br>";
                                
                                if(isset($_POST['NivelAcademico'])==false || isset($_POST['NivelAcademico'])=="")
                                echo "Falta definir el ID del área de conocimiento <br>";
                                
                                if(isset($_POST['TrabajoAct'])==false || isset($_POST['TrabajoAct'])=="")
                                echo "Falta definir el ID del área de conocimiento <br>";
                                
                                if(isset($_POST['IDUsuario'])==false || isset($_POST['IDUsuario'])=="")
                                echo "Falta definir el ID del área de conocimiento <br>";
                                
                            }
                        }
                        ?>
    
                    <br>
                    <h1>Modificar</h1>
                     
                    <?php
                        include("config.php");
                        $conexion = mysqli_connect($server,$db_user,$db_pass) or die ("error en la conexion");
                        if($conexion){
                            mysqli_select_db($conexion, $database) or die ("Error BD");

                        if(isset($_POST['enviardos'])){
                            $query="UPDATE Curriculum SET ".$_POST['opcion']."='".$_POST['texto']."' WHERE IDOfer='".$_POST['idedi']."';";
                            echo "La consulta generada es: <br>".$query;
                            if(mysqli_query($conexion,$query))/* echo "<br>datos guardados <br>"*/;
                        }
                        }
                            mysqli_close($conexion);
                        ?>
                        
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        ID a modificar: <input type="text" name="idedi"><br>
                        <select name="opcion">
                           <option value=""></option>
                           <option value="Nombre">Nombre de la Oferta</option>
                           <option value="CorreoEle">Puesto</option>
                           <option value="FechaNaci">Puestos disponibles</option>
                           <option value="Telefono">Descripción</option>
                           <option value="Descripcion">Fecha de Inicio</option>
                           <option value="Trabajo1">Fecha de finalización</option>
                           <option value="Trabajo2">Salario</option>
                           <option value="Trabajo3">Nombre de la Oferta</option>
                           <option value="IdiomaExtra1">Puesto</option>
                           <option value="IdiomaExtra2">Puestos disponibles</option>
                           <option value="NivelAcademico">Descripción</option>
                           <option value="TrabajoAct">Fecha de Inicio</option>
                        </select>
                        <input type="text" name="texto"><br>
                        <input type="submit" name="enviardos">
                     </form>
                    </div> <!-- end of text-container-->
                        
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
               
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    
    <!-- Footer -->
    <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>Acerca de nosotros</h4>
                        <p class="p-small">Nos especialisamos en encontrar las mejores ofertas de empleo para ti</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Miembros del equipo</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Montejano Briano Uriel - 177771</div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Contacto</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">UPSLP, San Luis Potosí, San Luis Potosí</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white" href="mailto:contact@tivo.com">blaster@gmail.com</a> <i class="fas fa-globe"></i><a class="white" href="https://blastersunfiles.online/">blastersunfiles.online</a></div>
                            </li>
                        </ul>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 OCC Proyecto</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
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