<?php
session_start();
if(isset($_POST['user']) && $_POST['user']!="" && 
  isset($_POST['pin']) && $_POST['pin']!="" ) 
{   
  $user=$_POST['user'];
  $pin=$_POST['pin'];
  $conexion = mysqli_connect("localhost","u130633821_urielproy","proyectoBSContra10","u130633821_proyecto") 
   or  die("Problemas en la conexion");
  if($conexion)
  { 
    mysqli_select_db($conexion,"u130633821_proyecto") 
    or  die("Problemas en la selec. de BDs");
    $query= "SELECT * FROM Usuarios WHERE 
    NombreUsu = '$user' AND ContraUsu= '$pin';";
    echo "La consulta generada es:<br>" .$query;
    if($registros=mysqli_query($conexion,$query))
    {
      $total_reg=mysqli_num_rows($registros);
      if($total_reg==1){// existe el usuario 
        $_SESSION['userName'] = $user;
        /*$_SESSION['perfil'] = $tupla['perfil'];
        $_SESSION['ultima'] = time();*/
        $registros = mysqli_query($conexion, $query) or die ("Problemas en la query ".mysqli_error());
        $tupla = mysqli_fetch_array($registros);
        if($tupla['TipoUsu']==Reclutador){
            header('Location: reclutador.php');
        }
        if($tupla['TipoUsu']==Administrador){
            header('Location: administrador.php');
        }
        
        if($tupla['TipoUsu']==Usuario){
            header('Location: usuario.php');
        }
      }  
      else{
        unset($_SESSION['userName']);
        $mensaje= "<br>NO HAY USUARIO<br>";     
      }
    } 
    mysqli_close($conexion);
  }
 }
 else{
      if(isset($_POST['enviar'])){                 
          if(isset($_POST['user'])==false || $_POST['user']=="" 
           || isset($_POST['pin'])==false || $_POST['pin']=="" )
          {
            unset($_SESSION['userName']);
            $mensaje= "<br>datos incompletos<br>";         
          }  
      }  
      else{ 
          if(isset($_SESSION['userName']))
             $mensaje = '<br>Bienvenido '.$_SESSION['userName']."<br>".
           "<a href='reclutador.html'></a>"; 
          else $mensaje= "<br>favor de autentificarse<br>";  
      }
 }

?>