<?php
/*
session_start(); 
if(!isset($_SESSION['userName']) ){
    header('Location: login.html');
    exit;
} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="col-lg-8">
 <div class="card-body py-5 px-md-5">
 <?php
 session_start(); 
$mensaje="accediendo";
if(isset($_POST['user']) && $_POST['user']!="" && 
  isset($_POST['pin']) && $_POST['pin']!="" ) 
{   
  $user=$_POST['user'];
  $pin=$_POST['pin'];
  $mensaje="<br>BIENVENIDO $user<br>";
  $conexion = mysqli_connect("localhost","u130633821_urielban","Contrabanco10.") 
   or  die("Problemas en la conexion");
  if($conexion)
  { 
    mysqli_select_db($conexion,"u130633821_bancos") 
    or  die("Problemas en la selec. de BDs");
    $query= "SELECT * FROM cuentas WHERE 
    user = '$user' AND pin= '$pin';";
   // echo "La consulta generada es:<br>" .$query;
    if($registros=mysqli_query($conexion,$query))
    {
      $total_reg=mysqli_num_rows($registros);
      if($total_reg==1){// existe el usuario 
        $_SESSION['userName'] = $user;
        $_SESSION['opcion'] = 0;

        echo "
            <form action='pagfondo.php' method ='post'> 
                <div class='form-check'>
                    <input class='form-check-input' type='radio' name='op' value='1' checked>
                    <label class='form-check-label' for='exampleRadios1'>Fuente 10 - Imagen1.jpg</label>
                </div>
                <div class='form-check'>
                    <input class='form-check-input' type='radio' name='op'value='2' >
                    <label class='form-check-label' for='exampleRadios1'>Fuente 12 - Imagen2.jpg</label>
                </div>
                <div class='form-check'>
                    <input class='form-check-input' type='radio' name='op' value='3' >
                    <label class='form-check-label' for='exampleRadios1'>Fuente 14 - Imagen3.jpg</label>
                </div>
                <br>
                <input type='submit' class='btn btn-primary btn-block mb-4'>
            </form>";        
      }  
      else{
        unset($_SESSION['userName']);
        $mensaje= "<br>USUARIO NO ENCONTRADO<br>";     
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
           "<a href='logout.php'>Cerrar Sesion</a>"; 

          else $mensaje= "<br>favor de autentificarse<br>";  
      }
 }
echo $mensaje;
?>

</div>

</div> 
</body>
</html>