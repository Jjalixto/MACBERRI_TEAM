<?php 

include '../modelo/conexion.php';
include '../controller/plantilla.php';

$id = $_POST['numero'];

$sql = "SELECT id,name,country_code,district FROM cities WHERE id like '$id'";
$resultado = mysqli_query($conexion,$sql);

$pdf = new PDF("P","mm","letter");
$pdf->AliasNbPages();
$pdf-> AddPage();

$pdf->SetFont("Arial","B",11);

$pdf->Cell(20,5,"ID",1,0,"C");
$pdf->Cell(30,5,"NAME",1,0,"C");
$pdf->Cell(40,5,"COUNTRY_CODE",1,0,"C");
$pdf->Cell(50,5,"DISTRICT",1,1,"C");

$pdf->SetFont("Arial","",9);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(20,10,$row['id'],1,0,"C",0);
    $pdf->Cell(30,10,$row['name'],1,0,"C",0);
    $pdf->Cell(40,10,$row['country_code'],1,0,"C",0);
    $pdf->Cell(50,10,$row['district'],1,1,"C",0);
}

$pdf->Output();

?>
