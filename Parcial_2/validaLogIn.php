<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>LogIn</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>
<body>
    <section class='vh-100'>
        <div class='container-fluid'>
          <div class='row'>
            <div class='col-sm-6 text-black'>      
              <div class='d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5'>
              <?php
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="proyecto";
                $correo=$_POST['correo'];
                $pin=$_POST['pin'];
                $perfil="";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                else {
                    $sql = "SELECT * FROM users WHERE correo='$correo' AND pin='$pin';";
                    $result = $conn->query($sql);
                    if ($result->num_rows == 1) {
                        $row = $result->fetch_assoc();
                        if($row['perfil']==1)$perfil="admin";
                        if($row['perfil']==2)$perfil="reclutador";
                        if($row['perfil']==3)$perfil="usuario"; 
                        echo "<h3 class='fw-normal mb-3 pb-3' style='letter-spacing: 1px;'>Hola ".$row['username']." <br>";
                        echo $perfil." </h3>";                        
                    } 
                    else {
                        echo "<h3 class='fw-normal mb-3 pb-3' style='letter-spacing: 1px;'>Datos Incorrectos</h3>";
                    }
                    $conn->close();
                }    
              ?>
              </div>      
            </div>
            <div class='col-sm-6 px-0 d-none d-sm-block'>
              <img src='logIn.jpg'
                alt='Login image' class='w-100 vh-100' style='object-fit: cover; object-position: left;'>
            </div>
          </div>
        </div>
      </section>
</body>
</html>