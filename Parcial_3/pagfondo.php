<?php
session_start(); 
if(!isset($_SESSION['userName']) ){
    header('Location: login.html');
    exit;
   
} 
$user=$_SESSION['userName'];
$_SESSION['opcion'] = $_POST['op'];
$rad=$_SESSION['opcion'];

echo $user;
echo "<br>";
echo $rad;

?>
<html>
<head><title>HOME</title>
</head>

<?php


 if($rad==1){
  echo "<body background='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhw4VP5oKXa7O09lw1L3xXm9IJeACM6Z_VmsrXmKX7&s'>
  <p style='font-size: 10pt; font-family: arial; color: white;'>Bienvenido a tu perfil ".$user."</p>
  </body>";
 }

 if($rad==2){
  echo "<body background='https://1757140519.rsc.cdn77.org/blog/wp-content/uploads/sites/4/2019/01/4-min.jpg'>
  <p style='font-size: 12pt; font-family: arial; color: white;'>Bienvenido a tu perfil ".$user."</p>
  </body>";
 }

 if($rad==3){
  echo "<body background='https://st.depositphotos.com/1605581/3032/i/450/depositphotos_30328185-stock-photo-abstract-blue-background-business-card.jpg'>
  <p style='font-size: 14pt; font-family: arial; color: white;'>Bienvenido a tu perfil ".$user."</p>
  </body>";
 }

?>

</html>
