<?php
            $server="localhost";
            $database="votos";
            $db_user="root";
            $db_pass="";
            $conexion=mysqli_connect($server,$db_user,$db_pass) or die("Error en la conexion");
            if($conexion){
                mysqli_select_db($conexion,"votos") or die("Error al sleccionar BD");  

                $query="SELECT * FROM votos ORDER BY estado;";
                $registros=mysqli_query($conexion,$query)
                while($tupla = mysqli_fetch_array($registros)){

                    echo "<tr><td>".$tupla['Estado']."</td>";
                    echo "<td>".$registros['capital']."</td>";
                    echo "<td>".$registros['abrev']."</td>";
                    echo "<td>".$registros['democrata']."</td>";
                    echo "<td>".$tupla['republicano']."</td></tr>";
        
                }
        }

?>