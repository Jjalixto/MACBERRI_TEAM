
<?php

require('../../fpdf186/fpdf.php'); //fpdf186

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    // $this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont("Arial","B",12);
    // Título
    $this->Cell(25);
    $this->Cell(140,5,"reporte en php",0,1,"C");
    // Fecha
    $this->SetFont("Arial","",10);
    $this->Cell(25,5,"fecha: ".date("d/m/Y"),0,1,"C");
    // Salto de línea
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
?>