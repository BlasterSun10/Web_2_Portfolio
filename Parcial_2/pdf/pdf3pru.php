<?php 
require('pdf/fpdf.php');
$pdf= new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(30,1,utf8_decode('Lista de Clientes'),0,1,'c',0);
$pdf->Cell(30,10,"",0,1,'c',0);
$pdf->Cell(30,10,"",0,1,'c',0);
$pdf->SetFont('Arial','I',10);
$cuenta=0;

$pdf->Cell(50,10,"Folio de la Factura",1,1,'L',0);
$pdf->Cell(50,10,$_POST['Folio'],1,1,'L',0);

$pdf->Cell(40,10,"",0,1);

$pdf->Cell(10,10,"Num",1,0,'L',0);
$pdf->Cell(50,10,"Nombre Articulo",1,0,'C',0);
$pdf->Cell(50,10,"Cantidad",1,1,'C',0);



$conexion=mysqli_connect("localhost","u130633821_uriel","BlasterSun1010","u130633821_facturas") or die("Problemas en la conexion");
$registros=mysqli_query($conexion,"SELECT articulos.NombreArt, articulos.Cantidad FROM artxfactura INNER JOIN articulos ON articulos.ID = artxfactura.IdArticulo WHERE artxfactura.FolioFactura = '$_POST[Folio]';") or die("Problemas en el select:".mysqli_error($conexion));
        while($row=$registros->fetch_assoc()){
            $cuenta=$cuenta+1;
            $pdf->Cell(10,10,$cuenta,1,0,'L',0);
            $pdf->Cell(50,10,$row['NombreArt'],1,0,'L',0);
            $pdf->Cell(50,10,utf8_decode($row['Cantidad']),1,1,'L',0);
        }
       $pdf->Cell(40,10,"",0,1);
        $pdf->Cell(50,10,"Suma",1,1,'C',0);
        
        $registros2=mysqli_query($conexion,"SELECT SUM(articulos.precio * artxfactura.Cantidad) AS total FROM artxfactura INNER JOIN articulos ON articulos.ID = artxfactura.IdArticulo WHERE artxfactura.FolioFactura = '$_POST[Folio]';") or die("Problemas en el select:".mysqli_error($conexion));
        while($row=$registros2->fetch_assoc()){

            $pdf->Cell(50,10,utf8_decode($row['total']),1,1,'L',0);
            
        }
$pdf->Cell(40,10,"Uriel Montejano Briano - 177771",0,1,'L',0);
$pdf->Cell(40,10,"Uriel Martinez Monreal - 178646",0,1,'L',0);
$pdf->Cell(40,10,"Angel Loredo Martinez- 178424",0,1,'L',0);
$pdf->Cell(40,10,"Universidad Politecnica de San Luis Potosi",0,1,'L',0);
$pdf->Cell(40,10,"Programacion Web II",0,1,'L',0);
$pdf->Cell(40,10,"",0,1);
$pdf->Output();
?>