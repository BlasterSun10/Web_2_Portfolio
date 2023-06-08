<!DOCTYPE html>
<html>

<?php
if ($_POST['genero'] == 0)
{echo "Hola Sr.  ";
}
else
{
echo "Hola Sra.  ";
}
echo " <b> {$_POST['apellido']}</b>, un gusto saludarte";
?>


</html>
