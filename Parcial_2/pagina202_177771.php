<!DOCTYPE html>
<html>

<?php
if(isset($_POST['genero']) && isset($_POST['apellido']) && $_POST['apellido']!="")
{
   if ($_POST['genero'] == 0)
   {echo "Hola Sr.  ";}
   else
   { echo "Hola Sra.  "; }
    echo " <b> {$_POST['apellido']}</b>, un gusto saludarte";
}
else
{
   if(isset($_POST['enviar']))
   {echo"<b>Faltan datos</b>";
   }
}
?>

</html>
