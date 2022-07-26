<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/logo.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'usuarios',1,0,'C');
    // Salto de línea
    $this->Ln(20);

 
    $this->cell(10,10, 'id',1,0,'C',0);
    $this->cell(30,10, 'nombre',1,0,'C',0);
    $this->cell(100,10, 'descripcion',1,0,'C',0);
    $this->cell(20,10, 'precio',1,0,'C',0);
    $this->cell(20,10, 'tono',1,1,'C',0);
   

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}
require '../../model/conexion.php';
$consulta = "SELECT * FROM productos";
$resultado =$mysqli->query($consulta);


$pdf = new PDF();
$pdf ->aliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc()){
    $pdf->cell(10,10, $row['id'],1,0,'C',0);
    $pdf->cell(30,10, $row['nombre'],1,0,'C',0);
    $pdf->cell(100,10, $row['descripcion'],1,0,'C',0);
    $pdf->cell(20,10, $row['precio'],1,0,'C',0);
    $pdf->cell(20,10, $row['tono'],1,1,'C',0);
  
}


$pdf->Output();
?>