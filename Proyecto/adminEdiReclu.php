<?php
session_start(); 
if(!isset($_SESSION['userName']) ){
    header('Location: indexproy.php');
    exit;
} 
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
    <title>Modo Administrador</title>
    
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
            <a class="navbar-brand logo-image" href="index.html"><img src="images/logoOCCR.png" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="administrador.php#header">Página principal</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="adminEdiEmp.php#features">Editar Empresas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="adminEdiReclu.php#features">Editar Reclutadores</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="adminEdiSoli.php#features">Editar Solicitantes</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="adminRespaldo.php#features">Respaldo</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="adminReportes.php#features">Reportes</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="adminRegAdm.php#features">Registrar Administrador</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="adminEdiPer.php#features">Perfil</a>
                    </li>
                    <form action="logout.php" method="post">
                        <span class="nav-item">
                            <input type="submit" class="btn-outline-sm" value="Cerrar Sesión">
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
                    <h1>Editar Reclutadores (Administrador)</h1>
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
                        <img class="img-fluid" src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_1080,h_675/https://silveira.cnt.br/wp-content/uploads/2021/07/Preciso-de-um-administrador-para-a-minha-empresa-1080x675.jpg" alt="alternative">
                    </div> <!-- end of image-container-large -->
                    <div class="text-container">
                        <h1>Reclutadores</h1>
                        <?php
                        
                        include("config.php");
                        $conexion = mysqli_connect($server, $db_user, $db_pass, $database) or die ("Problemas en la conexion");
                        
                        if($conexion){
                            
                            $query = "SELECT R.IDRec, U.NombreUsu, E.NombreEmp FROM Reclutadores AS R INNER JOIN Usuarios AS U ON R.idusuariorecl = U.IDUsu INNER JOIN Empresas AS E ON R.IDrecluemp = E.IDEmp;";
                            $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
                            echo "<table border = '1' align='center' bordercolor='blue' cellspacing='0'><tr bgcolor='yellow'><th>ID Reclutador</th><th>Reclutador</th><th>Empresa</th></tr>";
                            while($tupla = mysqli_fetch_array($registros)){
                                echo "<tr bgcolor='aqua'><td>".$tupla['IDRec']."</td>";
                                echo "<td>".$tupla['NombreUsu']."</td>";
                                echo "<td>".$tupla['NombreEmp']."</td><tr>";
                            }
                            echo "</table>";
                            mysqli_close($conexion);
                        }
                    ?>
                    
                    <br>
                    <h1>Definir a un usuario como Reclutador</h1>
                    <p align="center">Usuarios</p<br>
                    <?php
                        include("config.php");
                        $conexion = mysqli_connect($server, $db_user, $db_pass) or die ("Problemas en la conexion");
                        if($conexion){
                            mysqli_select_db($conexion, $database) or die ("Problemas en la base de datos");
                            $query = "SELECT * FROM Usuarios WHERE TipoUsu='Usuario';";
                            $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
                            echo "<table border = '1' align='center' bordercolor='blue' cellspacing='0'><tr bgcolor='yellow'><th>ID Usuario</th><th>Nombre</th><th>Tipo Usuario</th></tr>";
                            while($tupla = mysqli_fetch_array($registros)){
                                echo "<tr bgcolor='aqua'><td>".$tupla['IDUsu']."</td>";
                                echo "<td>".$tupla['NombreUsu']."</td>";
                                echo "<td>".$tupla['TipoUsu']."</td></tr>";
                            }
                            echo "</table>";
                        }
                    ?>
                    <br><p align="center">Empresas</p><br>
                    <?php
                        include("config.php");
                        $conexion = mysqli_connect($server, $db_user, $db_pass) or die ("Problemas en la conexion");
                        if($conexion){
                            mysqli_select_db($conexion, $database) or die ("Problemas en la base de datos");
                            $query = "SELECT * FROM Empresas;";
                            $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
                            echo "<table border = '1' align='center' bordercolor='blue' cellspacing='0'><tr bgcolor='yellow'><th>ID Empresa</th><th>Nombre</th></tr>";
                            while($tupla = mysqli_fetch_array($registros)){
                                echo "<tr bgcolor='aqua'><td>".$tupla['IDEmp']."</td>";
                                echo "<td>".$tupla['NombreEmp']."</td>";
                            }
                            echo "</table>";
                        }
                    ?>
                    
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <?php
                        $conexion = mysqli_connect($server,$db_user,$db_pass) or die ("error en la conexion");
                        if($conexion){
                            mysqli_select_db($conexion, "$database") or die ("Error BD");
                            
                            $query="SELECT * FROM Usuarios WHERE TipoUsu='Usuario';";
                            echo "<br>ID Usuario<br>";
                            $registros=mysqli_query($conexion, $query) or die ("error query".mysqli_error());
                            echo "<select name='IDUsu'>";
                            while($tupla=mysqli_fetch_array($registros)){
                                echo "<option value=".$tupla['IDUsu']. ">" .$tupla['IDUsu']." -> ".$tupla['NombreUsu']."</option>";
                            } 
                            echo"</select>";
                    
                            $querydos="SELECT * FROM Empresas;";
                            echo "<br>ID Empresa<br>";
                            $registrosdos=mysqli_query($conexion, $querydos) or die ("error query".mysqli_error());
                            echo "<select name='IDEmp'>";
                            while($tuplados=mysqli_fetch_array($registrosdos)){
                                echo "<option value=".$tuplados['IDEmp']. ">" .$tuplados['IDEmp']." -> ".$tuplados['NombreEmp']."</option>";
                            } 
                            echo"</select>";
                            echo "<br>";
                            echo "<input type='submit' name='enviardos'>";
                         
                            if(isset($_POST['enviardos'])){
                                $query="INSERT INTO Reclutadores (IDRec,idusuariorecl,IDrecluemp) VALUES('','$_POST[IDUsu]','$_POST[IDEmp]');";
                                echo "La consulta generada es: <br>".$query;
                                if(mysqli_query($conexion,$query)) echo "<br>datos guardados <br>";
                                
                                $querytres="UPDATE Usuarios SET TipoUsu='Reclutador' WHERE IDUsu='".$_POST['IDUsu']."';";
                                echo "La consulta generada es: <br>".$querytres;
                                if(mysqli_query($conexion,$querytres)) echo "<br>datos guardados <br>";
                            }
                        }
                        mysqli_close($conexion);
                        ?>
                   </form>
                    <br>
                    <h1>Asociar Reclutador a Oferta</h1>
                    
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <?php
                        $conexion = mysqli_connect($server,$db_user,$db_pass) or die ("error en la conexion");
                        if($conexion){
                            mysqli_select_db($conexion, "$database") or die ("Error BD");
                            echo "<p align='center'>Reclutadores</p><br>";
                            $query = "SELECT R.IDRec, U.NombreUsu FROM Reclutadores AS R INNER JOIN Usuarios AS U ON R.idusuariorecl = U.IDUsu;";
                            $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
                            echo "<table border = '1' align='center' bordercolor='blue' cellspacing='0'><tr bgcolor='yellow'><th>ID Reclutador</th><th>Reclutador</th></tr>";
                            while($tupla = mysqli_fetch_array($registros)){
                                echo "<tr bgcolor='aqua'><td>".$tupla['IDRec']."</td>";
                                echo "<td>".$tupla['NombreUsu']."</td>";
                            }
                            echo "</table>";
                            
                            echo "<br><p align='center'>Empresas</p><br>";
                            $query = "SELECT * FROM Ofertas;";
                            $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
                            echo "<table border = '1' align='center' bordercolor='blue' cellspacing='0'><tr bgcolor='yellow'><th>ID Oferta</th><th>Nombre Oferta</th></tr>";
                            while($tupla = mysqli_fetch_array($registros)){
                                echo "<tr bgcolor='aqua'><td>".$tupla['IDOfer']."</td>";
                                echo "<td>".$tupla['NombreOfer']."</td>";
                            }
                            echo "</table>";
                            
                            $query="SELECT R.IDRec, U.NombreUsu FROM Reclutadores AS R INNER JOIN Usuarios AS U ON R.idusuariorecl = U.IDUsu;";
                            echo "<br>ID Reclutador<br>";
                            $registros=mysqli_query($conexion, $query) or die ("error query".mysqli_error());
                            echo "<select name='IDRec'>";
                            while($tupla=mysqli_fetch_array($registros)){
                                echo "<option value=".$tupla['IDRec']. ">" .$tupla['IDRec']." -> ".$tupla['NombreUsu']."</option>";
                            } 
                            echo"</select>";
                    
                            $querydos="SELECT * FROM Ofertas;";
                            echo "<br>ID Oferta<br>";
                            $registrosdos=mysqli_query($conexion, $querydos) or die ("error query".mysqli_error());
                            echo "<select name='IDOfer'>";
                            while($tuplados=mysqli_fetch_array($registrosdos)){
                                echo "<option value=".$tuplados['IDOfer']. ">" .$tuplados['IDOfer']." -> ".$tuplados['NombreOfer']."</option>";
                            } 
                            echo"</select>";
                            echo "<br>";
                            
                            echo "<input type='submit' name='enviartres'>";
                           
                           if(isset($_POST['enviartres'])){
                                $query="INSERT INTO OferxReclu (IDofer,IDreclu) VALUES('$_POST[IDRec]','$_POST[IDOfer]');";
                                echo "La consulta generada es: <br>".$query;
                                if(mysqli_query($conexion,$query)) echo "<br>datos guardados <br>";
                                
                                $querytres="UPDATE Usuarios SET TipoUsu='Reclutador' WHERE IDUsu='".$_POST['IDUsu']."';";
                                echo "La consulta generada es: <br>".$querytres;
                                if(mysqli_query($conexion,$querytres)) echo "<br>datos guardados <br>";
                            }
                            
                        }
                        mysqli_close($conexion);
                        ?>
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