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
    <title>Modo Reclutador</title>
    
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
                    <h1>Editar Ofertas (Reclutador)</h1>
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
                        <img class="img-fluid" src="https://factorcapitalhumano.com/wp-content/uploads/2020/02/tendencias-de-reclutamiento-2020.jpg" alt="alternative">
                    </div> <!-- end of image-container-large -->
                    <div class="text-container">
                        <h1>Tus ofertas</h1>
                        <?php
                        include("config.php");
                        $conexion = mysqli_connect($server, $db_user, $db_pass) or die ("Problemas en la conexion");
                    
                        if($conexion){
                    
                            mysqli_select_db($conexion, $database) or die ("Problemas en la base de datos");
                            
                            $query = "SELECT * FROM Usuarios WHERE NombreUsu='$_SESSION[userName]';";
                            $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
                            $tupla = mysqli_fetch_array($registros);
                          
                            
                            $query = "SELECT * FROM Reclutadores INNER JOIN Usuarios ON Usuarios.IDUsu=Reclutadores.idusuariorecl WHERE Usuarios.IDUsu='$tupla[IDUsu]';";
                            $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
                            $tupla = mysqli_fetch_array($registros);
                            
                            $query = "SELECT * FROM Ofertas INNER JOIN OferxReclu ON Ofertas.IDOfer=OferxReclu.IDofer WHERE OferxReclu.IDreclu='$tupla[IDRec]';";
                            $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
                
                            echo "<table border = '1' align='center' bordercolor='blue' cellspacing='0'><tr bgcolor='#FF973C'><th>ID Oferta</th><th>Nombre de la Oferta</th><th>Puesto</th><th>Puestos Disponibles</th><th>Descripción</th><th>Fecha de Inicio</th><th>Fecha de Finalización</th><th>Salario</th><th>Área de conocimieto</th></tr>";

                               while($tupla = mysqli_fetch_array($registros)){
                                    echo "<tr bgcolor='#3CCDFF'><td>".$tupla['IDOfer']."</td>";
                                    echo "<td>".$tupla['NombreOfer']."</td>";
                                    echo "<td>".$tupla['PuestoOfer']."</td>";
                                    echo "<td>".$tupla['PuestosDisOfer']."</td>";
                                    echo "<td>".$tupla['DescOfer']."</td>";
                                    echo "<td>".$tupla['fechainicio']."</td>";
                                    echo "<td>".$tupla['fechafindisp']."</td>";
                                    echo "<td>".$tupla['Salario']."</td>";
                                    echo "<td>".$tupla['IDAreaCono']."</td><tr>";
                                   
                               
                           }

                            echo "</table>";
                            mysqli_close($conexion);
                        }
                    ?>
                    <br>
                    <h1>Áreas de conocimiento</h1>
                    <?php
                        include("config.php");
                        $conexion = mysqli_connect($server, $db_user, $db_pass) or die ("Problemas en la conexion");
                    
                        if($conexion){
                            mysqli_select_db($conexion, $database) or die ("Problemas en la base de datos");
                            
                            $query = "SELECT * FROM AreasConocimiento;";
                            $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
                            echo "<table border = '1' align='center' bordercolor='blue' cellspacing='0'><tr bgcolor='#FF973C'><th>ID Área</th><th>Área de Conocimiento</th></tr>";
                            while($tupla = mysqli_fetch_array($registros)){
                                echo "<tr bgcolor='#3CCDFF'><td>".$tupla['IDArea']."</td>";
                                echo "<td>".$tupla['NombreArea']."</td><tr>";
                            }
                            echo "</table>";
                            mysqli_close($conexion);
                        }
                    ?>
                    
                    <br>
                    <h1>Agregar</h1>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    Nombre: <input type="text" name="NombreOfer"><br>
                    Puesto: <input type="text" name="PuestoOfer"><br>
                    Puestos Disponibles: <input type="text" name="PuestosDisOfer"><br>
                    Descripción de la oferta: <input type="text" name="DescOfer"><br>
                    Fecha Inicio (AAAA-MM-DD): <input type="text" name="fechainicio"><br>
                    Fecha Final Disponible (AAAA-MM-DD): <input type="text" name="fechafindisp"><br>
                    Salario: <input type="text" name="Salario"><br>
                    ID área de conocimiento: <input type="text" name="IDAreaCono"><br>
                    <input type="submit" name="enviar">
                    </form>
                    
                     <?php 
                    include("config.php");
                    if(isset($_POST['NombreOfer']) && isset($_POST['PuestoOfer']) && isset($_POST['PuestosDisOfer']) && isset($_POST['DescOfer']) && isset($_POST['fechainicio']) && isset($_POST['fechafindisp']) && isset($_POST['Salario']) && isset($_POST['IDAreaCono']))
                    {
                        $conexion=mysqli_connect($server,$db_user,$db_pass) or die ("Problemas en la conexion");
                        if($conexion){
                            echo "Se conecto exitosamente <br>";
                            mysqli_select_db($conexion,$database)
                            or die ("Problemas en la seleccion de base de datos");
                            echo "Se conecto exitosamente a bd<br>";
                            $query = "INSERT INTO Ofertas (	IDOfer, NombreOfer, PuestoOfer, PuestosDisOfer, DescOfer, fechainicio, fechafindisp, Salario, IDAreaCono)
                            VALUES('','$_POST[NombreOfer]','$_POST[PuestoOfer]','$_POST[PuestosDisOfer]','$_POST[DescOfer]','$_POST[fechainicio]','$_POST[fechafindisp]','$_POST[Salario]','$_POST[IDAreaCono]');";
                            echo "La consulta generada es: <br>".$query;
                            if(mysqli_query($conexion,$query)) echo "<br>datos guardados <br>";
                            mysqli_close($conexion);
                        }
                    }
                    else{
                        if(isset($_POST['enviar'])){
                            if(isset($_POST['NombreOfer'])==false || isset($_POST['NombreOfer'])=="")
                            echo "Falta definir Nombre <br>";
                            
                            if(isset($_POST['PuestoOfer'])==false || isset($_POST['PuestoOfer'])=="")
                            echo "Falta definir Puesto de Oferta <br>";
                            
                            if(isset($_POST['PuestosDisOfer'])==false || isset($_POST['PuestosDisOfer'])=="")
                            echo "Falta definir Puestos disponibles<br>";
                            
                            if(isset($_POST['DescOfer'])==false || isset($_POST['DescOfer'])=="")
                            echo "Falta definir Descripción de Oferta <br>";
                            
                            if(isset($_POST['fechainicio'])==false || isset($_POST['fechainicio'])=="")
                            echo "Falta definir Fecha de inicio <br>";
                            
                            if(isset($_POST['fechafindisp'])==false || isset($_POST['fechafindisp'])=="")
                            echo "Falta definir Fecha Fianl Disponible <br>";
                            
                            if(isset($_POST['Salario'])==false || isset($_POST['Salario'])=="")
                            echo "Falta definir Salario <br>";
                            
                            if(isset($_POST['IDAreaCono'])==false || isset($_POST['IDAreaCono'])=="")
                            echo "Falta definir el ID del área de conocimiento <br>";
                            
                        }
                    }
                    ?>                   
                    
                    <br>
                    <h1>Modificar</h1>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <?php
                        include("config.php");
                        $conexion = mysqli_connect($server,$db_user,$db_pass) or die ("error en la conexion");
                        if($conexion){
                            mysqli_select_db($conexion, $database) or die ("Error BD");
                            
                        echo "<br>ID de la Oferta<br>";
                        $query="SELECT * FROM Ofertas";
                        $registros=mysqli_query($conexion, $query) or die ("error query".mysqli_error());
                        echo "<select name='IDOfer'>";
                        while($tupla=mysqli_fetch_array($registros)){
                            echo "<option value=".$tupla['IDOfer']. ">" .$tupla['IDOfer']." -> ".$tupla['NombreOfer']."</option>";
                        } 
                        echo"</select>";
                        
                        echo " 
                        <br>
                        <select name='opcion'>
                           <option value=''></option>
                           <option value='NombreOfer'>Nombre de la Oferta</option>
                           <option value='PuestoOfer'>Puesto</option>
                           <option value='PuestosDisOfer'>Puestos disponibles</option>
                           <option value='DescOfer'>Descripción</option>
                           <option value='fechainicio'>Fecha de Inicio</option>
                           <option value='fechafindisp'>Fecha de finalización</option>
                           <option value='Salario'>Salario</option>
                        </select>
                        
                        <input type='ext' name='texto'><br>
                        <input type='submit' name='enviardos'>
                        ";



                        if(isset($_POST['enviardos'])){
                            $query="UPDATE Ofertas SET ".$_POST['opcion']."='".$_POST['texto']."' WHERE IDOfer='".$_POST['IDOfer']."';";
                            echo "La consulta generada es: <br>".$query;
                            if(mysqli_query($conexion,$query))/* echo "<br>datos guardados <br>"*/;
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