<?php
require('pdf/fpdf.php');
date_default_timezone_set(America/Monterrey);
$fecha=date('Y-m-d');
$pdf=new FPDF('L','mm','Legal');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,utf8_decode('Lista de Administradores'));
$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,$pdf->Image("UPSLP.jpg", $pdf->GetX(), $pdf->GetY(),40,40));
$pdf->Cell(40,10,$pdf->Image("images/logoOCCR.png", $pdf->GetX(), $pdf->GetY(),100,40));

$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);
$pdf->Cell(40,10,"",0,1,'C',0);



$conexion=mysqli_connect("localhost","u130633821_urielproy","proyectoBSContra10","u130633821_proyecto") or die ("Problemas en la coneccion");
$registro=mysqli_query($conexion,"SELECT * FROM Usuarios WHERE TipoUsu='Administrador';") or die("Problema en el select: ".mysqli_error($conexion)); 

    $pdf->SetFont('Arial','I',10);
    
    $pdf->Cell(40,10,"Fecha actual",1,1,'C',0);
    $pdf->Cell(40,10,"$fecha",1,1,'C',0);
    
    $pdf->Cell(40,10,"",0,1,'C',0);
    
    $pdf->Cell(10,10,"ID",1,0,'C',0);
    $pdf->Cell(20,10,"Nombre",1,0,'C',0);
    $pdf->Cell(20,10,"Apelldio",1,0,'C',0);
    $pdf->Cell(10,10,"Edad",1,0,'C',0);
    $pdf->Cell(30,10,"RFC",1,0,'C',0);
    $pdf->Cell(20,10,"Sexo",1,0,'C',0);
    $pdf->Cell(30,10,"Fecha Nacimiento",1,0,'C',0);
    $pdf->Cell(30,10,"Domicilio",1,0,'C',0);
    $pdf->Cell(30,10,"Estudios",1,0,'C',0);
    $pdf->Cell(30,10,"Telefono",1,0,'C',0);
    $pdf->Cell(35,10,"Correo",1,0,'C',0);
    $pdf->Cell(30,10,"CURP",1,0,'C',0);
    $pdf->Cell(20,10,"Contraseña",1,0,'C',0);
    $pdf->Cell(20,10,"Tipo",1,1,'C',0);

       
    while($data=$row=$registro->fetch_assoc()){
        $pdf->Cell(10,10,$row['IDUsu'],1,0,'C',0);
        $pdf->Cell(20,10,$row['NombreUsu'],1,0,'C',0);
        $pdf->Cell(20,10,$row['ApellidoUsu'],1,0,'C',0);
        $pdf->Cell(10,10,$row['EdadUsu'],1,0,'C',0);
        $pdf->Cell(30,10,$row['RFCUsu'],1,0,'C',0);
        $pdf->Cell(20,10,$row['SexoUsu'],1,0,'C',0);
        $pdf->Cell(30,10,$row['FecNacUsu'],1,0,'C',0);
        $pdf->Cell(30,10,$row['DomicilioUsu'],1,0,'C',0);
        $pdf->Cell(30,10,$row['EstudiosUsu'],1,0,'C',0);
        $pdf->Cell(30,10,$row['TelefonoUsu'],1,0,'C',0);
        $pdf->Cell(35,10,$row['CorreoEleUsu'],1,0,'C',0);
        $pdf->Cell(30,10,$row['CURPUSU'],1,0,'C',0);
        $pdf->Cell(20,10,$row['ContraUsu'],1,0,'C',0);
        $pdf->Cell(20,10,$row['TipoUsu'],1,1,'C',0);
    }
    $pdf->Cell(30,15,"",0,1,'C',0);
    $pdf->Output();
    ob_end_flush();
    
?>
