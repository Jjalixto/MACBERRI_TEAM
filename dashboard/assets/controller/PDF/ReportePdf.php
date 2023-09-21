<?php 

require '../../model/ModeloBase.php';
require 'PlantillaPdf.php';

$id = $_GET['id'];

$sql = "SELECT id,numero,codigo,fecha FROM facturas WHERE id = '$id'";
$resultado = pg_query($conexion,$sql);

$pdf = new PDF("P","mm","letter");
$pdf->AliasNbPages();
$pdf-> AddPage();

$pdf->SetFont("Arial","B",9);

$pdf->Cell(20,5,"ID",1,0,"C");
$pdf->Cell(70,5,"NUMBER",1 ,0,"C");
$pdf->Cell(40,5,"CODIGO",1,0,"C");
$pdf->Cell(50,5,"FECHA",1,1,"C");

$pdf->SetFont("Arial","",9);

while($row = pg_fetch_assoc($resultado)){
    $pdf->Cell(20,10,$row['id'],1,0,"C",0);
    $pdf->Cell(70,10,$row['numero'],1,0,"C",0);
    $pdf->Cell(40,10,$row['codigo'],1,0,"C",0);
    $pdf->Cell(50,10,$row['fecha'],1,1,"C",0);
}

$pdf->Output();

?>
